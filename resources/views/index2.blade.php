@extends('layouts.admin')

@section('content')


	<script src="global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>

	<script src="assets/js/app.js"></script>

  <script src = "{{ URL::asset('global_assets/js/demo_pages/charts/echarts/pies_donuts.js') }}"></script>

	<script src="global_assets/js/demo_pages/widgets_stats2.js"></script>




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
    .card-body{
      height: 135px;
    }
		a{
			color: black;
		}
		.col-mdd-2{
			width: 17.66%;
			margin-left: 1%;
			margin-right: 1%;
			height:250px;

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




  <div class="row justify-content-center" >

    <div class="col-mdd-2">
      <h2 class="text-center">I Join</h2>
      <!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Потребительские кредиты</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
			                	</div>

			                	<div>
									I Join
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="I_Join_Cash"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

			</div>

      <div class="col-mdd-2">
        <h2 class="text-center">I Use</h2>

  			</div>

        <div class="col-mdd-2">
          <h2 class="text-center">I Pay</h2>
          <!-- Basic bar chart -->
    						<div class="card">
    							<div class="card-body">
    								<div class="d-flex">
    									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Потребительские кредиты</a></h5>
    									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
    			                	</div>

    			                	<div>
    									I Pay
    									<div class="text-muted font-size-sm">Response Rate</div>
    								</div>
    							</div>

    							<div class="container-fluid">
    								<div id="I_Pay_Cash"></div>
    							</div>
    						</div>
    						<!-- /basic bar chart -->




    			</div>

          <div class="col-mdd-2">
            <h2 class="text-center">I Solve</h2>

      			</div>

            <div class="col-mdd-2">
              <h2 class="text-center">I Leave</h2>
              <!-- Basic bar chart -->
        						<div class="card">
        							<div class="card-body">
        								<div class="d-flex">
        									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Потребительские кредиты</a></h5>
        									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
        			                	</div>

        			                	<div>
        									I Leave
        									<div class="text-muted font-size-sm">Response Rate</div>
        								</div>
        							</div>

        							<div class="container-fluid">
        								<div id="I_Leave_Cash"></div>
        							</div>
        						</div>
        						<!-- /basic bar chart -->


        			</div>
  </div>

	<div class="row justify-content-center">
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты PayDa</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Join
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="I_Join_PayDa"></div>
							</div>
						</div>
						<!-- /basic bar chart -->
		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты PayDa</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Use
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="I_Pay_PayDa"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты PayDa</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Pay
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="I_Use_PayDa"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты PayDa</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Leave
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="I_Leave_PayDa"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>


	</div>


	<div class="row justify-content-center">
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты Зарплатные</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Join
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row3_1"></div>
							</div>
						</div>
						<!-- /basic bar chart -->
		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты Зарплатные</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Use
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row3_2"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>
		<div class="col-mdd-2">
		</div>

		<div class="col-mdd-2">
		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Карты Зарплатные</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Leave
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row3_3"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>


	</div>

	<div class="row justify-content-center">
		<div class="col-mdd-2">
		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

				<!-- Basic bar chart -->
							<div class="card">
								<div class="card-body">
									<div class="d-flex">
										<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Контакт-Центр</a></h5>
										<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
													</div>

													<div>
										I Solve
										<div class="text-muted font-size-sm">Response Rate</div>
									</div>
								</div>

								<div class="container-fluid">
									<div id="row4_1"></div>
								</div>
							</div>
							<!-- /basic bar chart -->

		</div>
		<div class="col-mdd-2">
		</div>


	</div>
	<!--  /ROW  -->
	<div class="row justify-content-center">
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Беззалоговые кредиты</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Join
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row5_1"></div>
							</div>
						</div>
						<!-- /basic bar chart -->
		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Беззалоговые кредиты</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Leave
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row5_2"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>


	</div>
	<!--/ROW  -->
	<div class="row justify-content-center">
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Авто кредиты</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Join
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row6_1"></div>
							</div>
						</div>
						<!-- /basic bar chart -->
		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Авто кредиты</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Leave
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row6_2"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>


	</div>
	<!-- /ROW -->
	<div class="row justify-content-center">
		<div class="col-mdd-2">
		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">

		</div>
		<div class="col-mdd-2">
			<!-- Basic bar chart -->
						<div class="card">
							<div class="card-body">
								<div class="d-flex">
									<h5 class="font-weight-semibold mb-0"><a href="/NPS/0/0">Отделения</a></h5>
									<span class="badge bg-success-400 badge-pill align-self-center ml-auto">+53,6%</span>
												</div>

												<div>
									I Leave
									<div class="text-muted font-size-sm">Response Rate</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="row7_1"></div>
							</div>
						</div>
						<!-- /basic bar chart -->

		</div>


	</div>
	<!-- /ROW -->

			</div>



      <!-- /dashboard content -->



@endsection
