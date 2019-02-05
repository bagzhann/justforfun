@extends('layouts.admin')
@section('content')

<script src="../../../global_assets/js/demo_pages/charts/echarts/pies_donuts.js"></script>
<script src="../../../global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
<script src="../../../../global_assets/js/demo_pages/charts/echarts/areas.js"></script>


<!-- /Scripts -->
<div class="page-header page-header-light">
	<form class="" action="/" method="post">
		{{csrf_field()}}
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4> <span class="font-weight-semibold">Net Promoter Score:</span></h4>
		      </div>

          <div class="filter">
            <label id="labelFilter">ВОПРОС: </label>
            <select class="form-control"  name="question">
              <option value="0">NPS</option>
              <option value="1">1 вопрос</option>
              <option value="2">2 вопрос</option>
              <option value="3">3 вопрос</option>
              <option value="4">4 вопрос</option>
              <option value="5">5 вопрос</option>
            </select>
          </div>

          <div class="filter">
            <label id="labelFilter">Период: </label>
            <select class="form-control"  name="">
              <option value="">Сегодня</option>
              <option value="">Вчера</option>
              <option value="">Последние 7 дней</option>
              <option value="">Последние 30 дней</option>
              <option value="">Этот месяц</option>
              <option value="">Прошлый месяц</option>
            </select>
          </div>
					<button type="submit" name="button" class="btn btn-primary">Применить</button>

        </div>
			</form>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>
					</div>

					</div>
			</div>

      <div class="content">

      <div class="row">
        <div class="col-sm-5">
          <!-- Basic donut -->
					<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">NPS</h5>

							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="NPS"></div>
								</div>
							</div>
						</div>
						<!-- /basic donut -->

        </div>
        <div class="col-sm-7">
          <!-- Zoom option -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">NPS в динамике</h5>

					</div>

					<div class="card-body">
						<div class="chart-container">
							<div class="" id="NPS_zoom" style="height:400px;"></div>
						</div>
					</div>
				</div>
				<!-- /zoom option -->


        </div>

      </div>
@endsection
