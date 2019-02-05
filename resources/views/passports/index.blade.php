@extends('layouts.admin')
@section('content')


<script src="{{ URL::asset('./global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('./global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
<script src="{{ URL::asset('./global_assets/js/demo_pages/datatables_advanced.js') }}"></script>


<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Пользователи системы</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
          </div>

          <table class="table table-bordered table-hover datatable-highlight">
          <thead>
            <tr>
              <th>Имя</th>
              <th>Фамилия</th>
              <th>Email</th>
              <th>Status</th>
              <th class="text-center">Действия</th>
            </tr>
          </thead>
          <tbody>
            @foreach($passports as $passport)
            <tr>
              <td>{{$passport->name or ""}}</td>
              <td><a href="#">{{$passport->surname or ""}}</a></td>
              <td>{{$passport->email or ""}}</td>
              <td><span class="badge badge-success">Active</span></td>
              <td class="text-center">
                <div class="list-icons">
                  <div class="dropdown">
                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                      <i class="icon-menu9"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Изменить</a>
                      <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Добавить</a>
                      <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Удалить</a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
				</div>



@endsection
