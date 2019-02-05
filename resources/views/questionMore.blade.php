@extends('layouts.admin')
@section('content')
<script src="../../global_assets/js/demo_pages/charts/echarts/pies_donuts.js"></script>
<script src="../../../../global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
<style media="screen">
  #ExecutiveOverView{
    border:2px solid #324148;
    margin: 10px; }
    .filter{
      display: flex;
      flex-direction: row;

    }
    #labelFilter{
      font-family: Arial;
      font-size: 20px;
    }

		a{
			color: black;
		}


</style>
<div class="page-header page-header-light">
	<form class="" action="/" method="post">
		{{csrf_field()}}
				<div class="page-header-content header-elements-md-inline">

					<div class="page-title d-flex">
						<h4> <span class="font-weight-semibold">Краткий обзор результатов:</span></h4>
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
      <!-- /Page Header -->




  <div class="content">

				<!-- Main charts -->
				<div class="row">
          <div class="col-xl-5">
            <div class="card">
              <!--Infographic style  -->
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Infographic style</h5>
							</div>

							<div class="card-body">
								<div class="chart-container">
									<div class="chart has-fixed-height" id="pie_infographic"></div>
								</div>
							</div>
              <!--/Infographic style  -->
						</div>

          </div>
					<div class="col-xl-7" style="height:600px;">

						<!-- Traffic sources -->
						<div class="card" style="height:487px;">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Traffic sources</h6>
								<div class="header-elements">

								</div>
							</div>

							<div class="card-body py-0">
								<div class="row">
									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
												<i class="icon-people"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Всего опрошено</div>
												<span class="text-muted">2,349 avg</span>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-pencil7"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Ответило</div>
												<span class="text-muted">08:20 avg</span>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="d-flex align-items-center justify-content-center mb-2">
											<a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
												<i class="icon-stats-bars4"></i>
											</a>
											<div>
												<div class="font-weight-semibold">Response rate</div>
												<span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="chart position-relative" id="traffic-sources"></div>
						</div>
						<!-- /traffic sources -->

					</div>


				</div>
				<!-- /main charts -->

      </div>



@endsection
