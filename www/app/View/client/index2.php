{% extends "_template/base.html" %}

{% block title %}A2B HUB{% endblock %}

{% block css %}
  {{ getCss()|raw }}
{% endblock %}


{% block body %}
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
      <!-- Navbar -->
      {% include ('_template/admin/navbar.php') %}
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      {% include ('_template/admin/menu_sidebar.php') %}
      <!-- /.Main Sidebar Container -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        {% set url = getCurrentPage() %}

        {% if '/admin' in url %}

          {% include ('admin/search_result.php') %}
          {% include ('admin/datatable.php') %}

        {% elseif '/admin/profile' in url %}

          {% include ('admin/profile.php') %}

        {% elseif '/admin/userLogs' in url %}

          {% include ('admin/user_logs.php') %}

        {% else %}

          {% include ('_template/404.php') %}

        {% endif %}

        {% include ('admin/add_form.php') %}
        
      </div>
      <!-- /.Content Wrapper. Contains page content -->
    </div>
  </body>
{% endblock %}

{% block js %}
  {{ getJs()|raw }}
{% endblock %}