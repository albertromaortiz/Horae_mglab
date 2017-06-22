<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-primary">
      <div class="inner">
        <h3>{{ $users->count() }}</h3>

        <p>Usuarios</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-stalker"></i>
      </div>
      <a href="/admin/users" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3>{{ $customers->count() }}</h3>

        <p>Clientes</p>
      </div>
      <div class="icon">
        <i class="ion ion-android-locate"></i>
      </div>
      <a href="/admin/customers" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-orange">
      <div class="inner">
        <h3>{{ $projects->count() }}</h3>

        <p>Proyectos
        </p>
      </div>
      <div class="icon">
        <i class="ion ion-folder"></i>
      </div>
      <a href="/admin/projects" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{ $tasks->count() }}</h3>

        <p>Tareas</p>
      </div>
      <div class="icon">
        <i class="ion ion-clipboard"></i>
      </div>
      <a href="/admin/tasks" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>


  <!-- ./col -->

</div>
<!-- /.row -->
