
$(document).ready(function() {

    var loader = '<div id="loader-wrapper" class="d-flex justify-content-center">' + 
                    '<div class="spinner-border" role="status">' + 
                    '<span class="sr-only">Loading...</span>' + 
                    '</div>' + 
                '</div>'; 

    // Bootstrap File Input
    var $el1 = $("#input");
    $('.file-loading').show();
    $el1.fileinput({
        theme: 'fas',
        uploadUrl: document.location.origin + "/api/post/document/upload" + param,
        deleteUrl: "delete.php",
        uploadAsync: false,
        allowedPreviewMimeTypes: null,
        initialPreviewAsData: true,
        initialPreviewFileType: ['pdf', 'office', 'gdocs', 'other'],
        initialPreview: initialPreview,
        initialPreviewAsData: initialPreviewAsData,
        initialPreviewFileType: initialPreviewFileType,
        initialPreviewConfig: initialPreviewConfig,
        initialPreviewThumbTags: initialPreviewThumbTags,
        initialPreviewDownloadUrl: '/404.html',
        previewFileIcon: '<i class="fas fa-file"></i>',
        previewFileIconSettings: {
            'docx': '<i class="fas fa-file-word text-primary"></i>',
            'xlsx': '<i class="fas fa-file-excel text-success"></i>',
            'pptx': '<i class="fas fa-file-powerpoint text-danger"></i>',
            'jpg': '<i class="fas fa-file-image text-warning"></i>',
            'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
            'zip': '<i class="fas fa-file-archive text-muted"></i>',
        }, 
        showPreview: true,
        initialPreviewDownloadUrl: false,
        actionDownload: false,
        enableResumableUpload: false,
        resumableUploadOptions: {
            // uncomment below if you wish to test the file for previous partial uploaded chunks
            // to the server and resume uploads from that point afterwards
            // testUrl: "http://localhost/test-upload.php"
        },
        uploadExtraData: {
            // extra data can be inserted here like document_id, user_id
            'uploadToken': 'SOME-TOKEN', // for access control / security 
        },
        // uploadExtraData: function() {
        //     return {
        //         _token: '<?php echo csrf_token() ?>',
        //     };
        // },
        showPreview: true,
        showUpload: true, // hide upload button
        showRemove: false, // hide remove button
        showDownload: false,
        overwriteInitial: false, // append files to initial preview
        minFileCount: 1,
        maxFileCount: 5,
        browseOnZoneClick: true,
        fileActionSettings: {
            showDrag: true,
            showZoom: true,
            showUpload: false,
            showDelete: false,
            showDownload: false,
            // removeTitle: 'Remove File',
            // uploadTitle: 'Upload File',
            // downloadTitle: 'Download file',
        },
        // layoutTemplates: {
        //     main1: '{preview}\n' +
        //         '<div class="kv-upload-progress kv-hidden"></div><div class="clearfix"></div>\n' +
        //         '<div class="input-group {class}">\n' +
        //         '  {caption}\n' +
        //         '  <div class="input-group-btn">\n' +
        //         '    {remove}\n' +
        //         '    {cancel}\n' +
        //         '    {pause}\n' +
        //         '    {upload}\n' +
        //         '    {browse}\n' +
        //         '  </div>\n' +
        //         '</div>',
        //     main2: '{preview}\n<div class="kv-upload-progress hide"></div>\n{remove}\n{cancel}\n{upload}\n{browse}\n',
        //     preview: '<div class="file-preview {class}">\n' +
        //         '    {close}\n' +
        //         '    <div class="close fileinput-remove">×</div>\n' +
        //         '    <div class="{dropClass}">\n' +
        //         '    <div class="file-preview-thumbnails">\n' +
        //         '    </div>\n' +
        //         '    <div class="clearfix"></div>' +
        //         '    <div class="file-preview-status text-center text-success"></div>\n' +
        //         '    <div class="kv-fileinput-error"></div>\n' +
        //         '    </div>\n' +
        //         '</div>',
        //     icon: '<span class="glyphicon glyphicon-file kv-caption-icon"></span>',
        //     caption: '<div class="file-caption form-control {class}" tabindex="500">\n' +
        //         '  <span class="file-caption-icon"></span>\n' +
        //         '  <input class="file-caption-name" onkeydown="return false;" onpaste="return false;">\n' +
        //         '</div>',
        //     btnDefault: '<button type="{type}" tabindex="500" title="{title}" class="{css}"{status}>{icon}{label}</button>',
        //     btnLink: '<a href="{href}" tabindex="500" title="{title}" class="{css}"{status}>{icon}{label}</a>',
        //     btnBrowse: '<div tabindex="500" class="{css}"{status}>{icon}{label}</div>',
        //     modalMain: '<div id="kvFileinputModal" class="file-zoom-dialog modal fade" tabindex="-1" aria-labelledby="kvFileinputModalLabel"></div>',
        //     modal: '<div class="modal-dialog modal-lg{rtl}" role="document">\n' +
        //         '  <div class="modal-content">\n' +
        //         '    <div class="modal-header">\n' +
        //         '      <div class="kv-zoom-actions pull-right">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
        //         '      <h3 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h3>\n' +
        //         '    </div>\n' +
        //         '    <div class="modal-body">\n' +
        //         '      <div class="floating-buttons"></div>\n' +
        //         '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
        //         '    </div>\n' +
        //         '  </div>\n' +
        //         '</div>\n',
        //     progress: '<div class="progress">\n' +
        //         '    <div class="progress-bar progress-bar-success progress-bar-striped text-center" role="progressbar" aria-valuenow="{percent}" aria-valuemin="0" aria-valuemax="100" style="width:{percent}%;">\n' +
        //         '        {status}\n' +
        //         '     </div>\n' +
        //         '</div>\n' +
        //         '{stats}',
        //     stats: '<div class="text-info file-upload-stats">' +
        //         '<span class="pending-time">{pendingTime}</span> ' +
        //         '<span class="upload-speed">{uploadSpeed}</span>' +
        //         '</div>',
        //     footer: '<div class="file-thumbnail-footer">\n' +
        //         '    <div class="file-caption-name" style="width:{width}">{caption}</div>\n' +
        //         '    {progress} {actions}\n' +
        //         '</div>',
        //     actions: '<div class="file-actions">\n' +
        //         '    <div class="file-footer-buttons">\n' +
        //         '        {upload} {download} {delete} {zoom} {other}' +
        //         '    </div>\n' +
        //         '    {drag}\n' +
        //         '    <div class="file-upload-indicator" title="{indicatorTitle}">{indicator}</div>\n' +
        //         '    <div class="clearfix"></div>\n' +
        //         '</div>',
        //     actionDelete: '<button type="button" class="kv-file-remove {removeClass}" title="{removeTitle}"{dataUrl}{dataKey}>{removeIcon}</button>\n',
        //     actionUpload: '<button type="button" class="kv-file-upload {uploadClass}" title="{uploadTitle}">{uploadIcon}</button>\n',
        //     actionDownload: '<button type="button" class="{downloadClass}" title="{downloadTitle}" data-url="{downloadUrl}" data-caption="{caption}">{downloadIcon}</button>\n',
        //     actionZoom: '<button type="button" class="kv-file-zoom {zoomClass}" title="{zoomTitle}">{zoomIcon}</button>',
        //     actionDrag: '<span class="file-drag-handle {dragClass}" title="{dragTitle}">{dragIcon}</span>'
        // },
        otherActionButtons: '<button type="button" ' +
                                'class="kv-file-edit btn btn-sm btn-kv btn-default btn-outline-secondary" ' + 
                                'title="Request for Edit"{dataUrl}{dataKey} ' +
                                'data-doc_id="{id}" data-doc_status="{status}">' +
                                    '<i class="fas fa-edit"></i>' +
                            '</button>\n' +
                            '<button type="button" ' +
                                'class="kv-file-comment btn btn-sm btn-kv btn-default btn-outline-secondary" ' + 
                                'title="View Comment"{dataUrl}{dataKey} ' +
                                'data-doc_id="{id}" data-doc_status="{status}">' +
                                    '<i class="fas fa-comment"></i>' +
                            '</button>\n' +
                                '<button type="button" ' +
                                    'class="kv-file-status btn btn-sm btn-kv btn-default btn-outline-secondary" ' + 
                                    'title="Change Status"{dataUrl}{dataKey} ' +
                                    'data-doc_id="{id}" data-doc_status="{status}">' +
                                        '<i class="fas {icon} {status}"></i>' +
                                '</button>\n',
    }).on('filebatchpreupload', function(event, data) {
        $('#kv-success-1').html('<h4>Upload Status</h4><ul></ul>').hide();
        var n = data.files.length, files = n > 1 ? n + ' files' : 'one file';
        swal({
            title: "Are you sure you want to upload " + files + " to CargoWise?",
            text: "Once uploaded, you will not be able to remove this file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }) .then((willDelete) => {
            if (willDelete) {
                swal("Your file will be uploaded shortly", {
                icon: "success",
                });
            } else {
                swal("Upload aborted!");
            }
        });
        // if (!window.confirm(")) {
        //     return {
        //         message: "Upload aborted!", // upload error message
        //         data:{} // any other data to send that can be referred in `filecustomerror`
        //     };
        // }
    }).on("filebatchselected", function(event, files) {
        $el1.fileinput("upload");
    }).on('fileuploaded', function(event, data, id, index) {

        var fname = data.files[index].name,
            out = '<li>' + 'Uploaded file # ' + (index + 1) + ' - '  +  fname + ' successfully.' + '</li>';
            swal(out);
        // $(document).Toasts('create', {
        //     title: 'Success',
        //     body: out,
        //     autohide: true,
        //     close: false,
        //     class:'bg-success'
        // });
        //   $('#kv-success-1').append(out);
        //   $('#kv-success-1').fadeIn('slow');
        setTimeout(function(){
            // $('#kv-success-1').fadeOut('slow');
            $('.kv-upload-progress').fadeOut('slow');
        }, 3000);
    }).on('fileuploaderror', function(event, data, msg) {
        console.log('File Upload Error', 'ID: ' + data.fileId + ', Thumb ID: ' + data.previewId);
    }).on('filebatchuploadcomplete', function(event, preview, config, tags, extraData) {
        console.log('File Batch Uploaded', preview, config, tags, extraData);
    }).on('filebatchuploadsuccess', function(event, data) {
        var out = '';
        $.each(data.files, function(key, file) {
            var fname = file.name;
            out = out + '<li>' + 'Uploaded file # ' + (key + 1) + ' - '  +  fname + ' successfully.' + '</li>';
        });
        $('#kv-success-2 ul').append(out);
        $('#kv-success-2').fadeIn('slow');
    });

    // Button Status
    // $('button.kv-file-status').each(function() {
    //     if($(this).children().hasClass('approved')) {
    //         $(this).children().removeClass('fa-thumbs-down').addClass('fa-thumbs-up');
    //     }
    // });
    $('button.kv-file-status').click(function() {
        var doc_status = $(this).data("doc_status");
        var doc_id = $(this).data("doc_id");
        if(doc_status === 'approved')  doc_status = 'pending'; else doc_status = 'approved';

        var msg = confirm("This will change the status of the document to " + doc_status.charAt(0).toUpperCase() + doc_status.slice(1) + " . Do you still want to continue?");

        if(msg == true) {
            $.ajax({
                type: "POST",
                url:"/document/updateDocumentStatus",
                ContentType: 'application/json',
                data:{ "doc_status":doc_status, "doc_id":doc_id },
                success: function(response) {
                    //alert('Document was set to ' + doc_status.charAt(0).toUpperCase() + doc_status.slice(1));
                    $(document).Toasts('create', {
                        title: 'Success',
                        body: 'Document was set to ' + doc_status.charAt(0).toUpperCase() + doc_status.slice(1),
                        autohide: true,
                        close: false,
                        class:'bg-success'
                    }).on('hidden.bs.toast', function () {
                        // REMOVE FUNCTION    
                    });
                    // alert('Please leave a note for the ' + doc_status + ' document');
                    if (window.confirm("Do you want to leave a comment?")) {
                        var url = "/document/comment/" + doc_id + "/" + doc_status;

                        // load the url and show modal on success
                        preloader(url);
                    } else {
                        // $.post( "document/putDocumentComment", { user_id: "1", doc_id: "10001" } );
                        $.post( "/document/putDocumentComment", { 
                            title: "", 
                            message: "", 
                            status: doc_status, 
                            user_id: user_id, 
                            document_id: doc_id
                        } );
                    }
                    var d = $('.d-' + doc_id);
                    if (d.attr('class').indexOf('bg-') === -1)
                        {d.addClass("bg-" + doc_status);}
                    else  
                        {$('.bg-approved, .bg-pending').toggleClass('bg-approved bg-pending');}
                    d.toggleClass("b-approved b-pending");
                    $('[data-key="' + doc_id + '"]').attr("data-doc_status", doc_status);
                    d.find('.kv-file-status').children().toggleClass("approved fa-thumbs-up pending fa-thumbs-down");
                    //find('i').toggleClass("fa-thumbs-up fa-thumbs-down");
                    //.children().toggleClass("approved pending").data("doc_status", doc_status);
                }
            });
        }
    }).mouseenter(function() {
        $( this ).find( "i" ).toggleClass("fa-thumbs-up fa-thumbs-down").toggleClass("approved pending");
    }).mouseleave(function(){
        $( this ).find( "i" ).toggleClass("fa-thumbs-up fa-thumbs-down").toggleClass("approved pending");
    });

    // Button Comment
    $('button.kv-file-comment').click(function(ev) {
        var doc_status = $(this).data("doc_status");
        var doc_id = $(this).data("doc_id");
        //$('#document-upload, #document-comment').toggle();
        ev.preventDefault();
        // var target = $(this).attr("href");
        // var target = "document/comment/" + doc_id + "/" + doc_status;
        var url = "document/comment/" + doc_id + "/view" ;

        // load the url and show modal on success
        preloader(url);
    });

    // Button Edit
    $('button.kv-file-edit').click(function(ev) {
        var doc_status = $(this).data("doc_status");
        var doc_id = $(this).data("doc_id");
        //$('#document-upload, #document-comment').toggle();
        ev.preventDefault();
        // var target = $(this).attr("href");
        // var target = "document/comment/" + doc_id + "/" + doc_status;
        var url = "document/request/" + shipment_id + "/" + doc_id ;

        // load the url and show modal on success
        preloader(url);
    });

    $('form#form-modal').validate();

    // Submit Form
    $('button#submit').click(function(e) {
        var form = $('form#form-modal');
        var url = form.attr('action');

        if(form.valid()) {
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                beforeSend: function(){
                    form.empty().html('<center id="loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></center>');  
                },
                success: function(result) {
                    if(result == 'true') {
                        form.empty().html('Submitted Succesfully!');
                    } else {
                        form.empty().html(result);
                    }
                }
            });
        }
        
        // form.validate({
        //     success: "valid",
        //     showErrors: function(errorMap, errorList) {
        //         $("#summary").html("Your form contains "
        //           + this.numberOfInvalids()
        //           + " errors, see details below.");
        //         this.defaultShowErrors();
        //       },
        //     submitHandler: function() { 
        //         $.ajax({
        //             type: "POST",
        //             url: url,
        //             data: form.serialize(),
        //             beforeSend: function(){
        //                 form.empty().html('<center id="loader"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span></center>');  
        //             },
        //             success: function(result) {
        //                 if(result == 'false') {
        //                     form.empty().html('Submitted Succesful!');
        //                 } else {
        //                     form.empty().html(result);
        //                 }
        //             }
        //         });
        //     }

        // });

    });

    // Back Button
    $('button#go_back').click(function(e) {
        var url = "/shipment/document/" + shipment_id + "/" + document_type;
        preloader(url);
    });

    // Other functions
    function file_ext(filename) {
        return typeof filename != "undefined" ? filename.substring(filename.lastIndexOf(".")+1, filename.length).toLowerCase() : false;
    }

    // Show loader
    function preloader(url) {

        $("#myModal .modal-body").append(loader);

        // load the url and show modal on success
        $("#myModal .modal-body").load(url, 
        function(response, status, xhr) { 
            if(xhr.status == 200){
                $('#loader-wrapper').remove();
                $("#myModal").modal("show"); 
            } else {
                alert("Error: " + xhr.status + ": " + xhr.statusText);
                $('#loader-wrapper').remove();
            }
        });

        //$('button#request').toggle();
    }
});