@extends('admin.layout.app')

@section('content')


<section class="content-header">
  <h4>
    Ubah Data isdh
      <small>Bisdh Wilayah III Pontianak</small>
  </h4>
          <ol class="breadcrumb">
            <li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i>Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i>Profil</a></li>
            <li><a href="/admin/isdh">Tata Usaha</a></li>
            <li class="nonactive"><a href="/admin/isdh/{{$isdh->id}}/edit">Edit isdh</a></li>
          </ol>
</section>


<section class="content">
   

    <div class="form-group">
      <!-- <textarea name="content" rows="8" cols="80" class="form-control"></textarea> -->
        <div class="box box-success">
              <div class="box-header with-border">
                <i class=" fa fa-edit"></i>
                <h3 class="box-title">Edit Data isdh </h3>
              </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('admin.a-isdh.edit', $isdh) }}" class="form-horizontal">

                    {{ csrf_field() }}

                    {{ method_field("PUT") }}

                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-md-2 control-label" for="title">Nama Konten</label>

                        <div class="col-md-9">
                          <input type="text" class="form-control" id="title" placeholder="nama" value="{{ $isdh->title }}" name="title">
                        </div>
                      </div>
                      
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <input type="submit" class="btn btn-info" value="update">
                    </div>
                    <!-- /.box-footer -->
                </form>
        </div>
    </div>
 
</section>

@endsection

 