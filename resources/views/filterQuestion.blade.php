@extends('layouts.admin')

@section('content')


	<script src="global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>

	<script src="assets/js/app.js"></script>

  <script src = "{{ URL::asset('global_assets/js/demo_pages/charts/echarts/pies_donuts.js') }}"></script>

	<script src="global_assets/js/demo_pages/widgets_stats.js"></script>




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
		.col-mdd-2{
			width: 18.00%;
			margin-left: 1%;
			margin-right: 1%;

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




  <div class="row" >

    <div class="col-mdd-2">
      <h2 class="text-center">I Join</h2>
      <!-- App status -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h4 class="card-title">Потребительские кредиты</h4>

				</div>
				<div class="" style="width: 90%; text-align:center; margin:auto;">
						<a href="questionMore/1"><h6>How to get to Brighton Beach    How to get to Brighton Beach   How to get to Brighton Beach   How to get to Brighton Beach ?</h6></a>
				</div>

				<div class="card-body">
							<ul class="list-unstyled mb-0">
									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-info" style="width: 25%;">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-danger" style="width: 13%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-success" style="width: 44%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 11%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1" >Очень медленно <span class="text-muted ml-auto">7%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 7%;color: #FFB980;">
								</div>
							</div>
									</li>
							</ul>
				</div>
			</div>
						<!-- /app status -->

			</div>

      <div class="col-mdd-2">
        <h2 class="text-center">I Use</h2>



  			</div>

        <div class="col-mdd-2">
          <h2 class="text-center">I Pay</h2>

					<div class="card">
						<div class="card-header header-elements-inline">
							<h4 class="card-title">Потребительские кредиты</h4>

						</div>

						<div class="card-body">
									<ul class="list-unstyled mb-0">
											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-info" style="width: 25%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-danger" style="width: 13%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-success" style="width: 44%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-primary" style="width: 11%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-primary" style="width: 7%">
										</div>
									</div>
											</li>
									</ul>
						</div>
					</div>



    			</div>

          <div class="col-mdd-2">
            <h2 class="text-center">I Solve</h2>




      			</div>

            <div class="col-mdd-2">
              <h2 class="text-center">I Leave</h2>

							<div class="card">
								<div class="card-header header-elements-inline">
									<h4 class="card-title">Потребительские кредиты</h4>

								</div>

								<div class="card-body">
											<ul class="list-unstyled mb-0">
													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-info" style="width: 25%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-danger" style="width: 13%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-success" style="width: 44%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 11%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 7%">
												</div>
											</div>
													</li>
											</ul>
								</div>
							</div>

        			</div>
  </div>

	<div class="row" >

    <div class="col-mdd-2">

      <!-- App status -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h4 class="card-title">Карты PayDa</h4>

				</div>

				<div class="card-body">
							<ul class="list-unstyled mb-0">
									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-info" style="width: 25%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-danger" style="width: 13%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-success" style="width: 44%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 11%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 7%">
								</div>
							</div>
									</li>
							</ul>
				</div>
			</div>
						<!-- /app status -->

			</div>

      <div class="col-mdd-2">

				<div class="card">
					<div class="card-header header-elements-inline">
						<h4 class="card-title">Карты PayDa</h4>

					</div>

					<div class="card-body">
								<ul class="list-unstyled mb-0">
										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-info" style="width: 25%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-danger" style="width: 13%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-success" style="width: 44%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-primary" style="width: 11%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-primary" style="width: 7%">
									</div>
								</div>
										</li>
								</ul>
					</div>
				</div>

  			</div>

        <div class="col-mdd-2">


					<div class="card">
						<div class="card-header header-elements-inline">
							<h4 class="card-title">Карты PayDa</h4>

						</div>

						<div class="card-body">
									<ul class="list-unstyled mb-0">
											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-info" style="width: 25%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-danger" style="width: 13%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-success" style="width: 44%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-primary" style="width: 11%">
										</div>
									</div>
											</li>

											<li class="mb-2">
													<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
									<div class="progress" style="height: 0.375rem;">
										<div class="progress-bar bg-primary" style="width: 7%">
										</div>
									</div>
											</li>
									</ul>
						</div>
					</div>



    			</div>

          <div class="col-mdd-2">




      			</div>

            <div class="col-mdd-2">

							<div class="card">
								<div class="card-header header-elements-inline">
									<h4 class="card-title">Карты PayDa</h4>

								</div>

								<div class="card-body">
											<ul class="list-unstyled mb-0">
													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-info" style="width: 25%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-danger" style="width: 13%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-success" style="width: 44%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 11%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 7%">
												</div>
											</div>
													</li>
											</ul>
								</div>
							</div>

        			</div>
  </div>

	<div class="row" >

    <div class="col-mdd-2">

      <!-- App status -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h4 class="card-title">Карты Зарплатные</h4>

				</div>

				<div class="card-body">
							<ul class="list-unstyled mb-0">
									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-info" style="width: 25%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-danger" style="width: 13%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-success" style="width: 44%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 11%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 7%">
								</div>
							</div>
									</li>
							</ul>
				</div>
			</div>
						<!-- /app status -->

			</div>

      <div class="col-mdd-2">

				<div class="card">
					<div class="card-header header-elements-inline">
						<h4 class="card-title">Карты Зарплатные</h4>

					</div>

					<div class="card-body">
								<ul class="list-unstyled mb-0">
										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-info" style="width: 25%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-danger" style="width: 13%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-success" style="width: 44%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-primary" style="width: 11%">
									</div>
								</div>
										</li>

										<li class="mb-2">
												<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
								<div class="progress" style="height: 0.375rem;">
									<div class="progress-bar bg-primary" style="width: 7%">
									</div>
								</div>
										</li>
								</ul>
					</div>
				</div>

  			</div>

        <div class="col-mdd-2">






    			</div>

          <div class="col-mdd-2">




      			</div>

            <div class="col-mdd-2">

							<div class="card">
								<div class="card-header header-elements-inline">
									<h4 class="card-title">Карты Зарплатные</h4>

								</div>

								<div class="card-body">
											<ul class="list-unstyled mb-0">
													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-info" style="width: 25%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-danger" style="width: 13%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-success" style="width: 44%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 11%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 7%">
												</div>
											</div>
													</li>
											</ul>
								</div>
							</div>

        			</div>
  </div>
	<!-- /Row -->

	<div class="row" >

    <div class="col-mdd-2">

			</div>

      <div class="col-mdd-2">
			</div>

        <div class="col-mdd-2">

    			</div>

          <div class="col-mdd-2">

						<div class="card">
							<div class="card-header header-elements-inline">
								<h4 class="card-title">Контакт-центр</h4>

							</div>

							<div class="card-body">
										<ul class="list-unstyled mb-0">
												<li class="mb-2">
														<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-info" style="width: 25%">
											</div>
										</div>
												</li>

												<li class="mb-2">
														<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-danger" style="width: 13%">
											</div>
										</div>
												</li>

												<li class="mb-2">
														<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-success" style="width: 44%">
											</div>
										</div>
												</li>

												<li class="mb-2">
														<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-primary" style="width: 11%">
											</div>
										</div>
												</li>

												<li class="mb-2">
														<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
										<div class="progress" style="height: 0.375rem;">
											<div class="progress-bar bg-primary" style="width: 7%">
											</div>
										</div>
												</li>
										</ul>
							</div>
						</div>


      			</div>

            <div class="col-mdd-2">



        			</div>
  </div>
	<!-- /ROW -->


	<div class="row" >

    <div class="col-mdd-2">

      <!-- App status -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h4 class="card-title">Беззалоговые кредиты</h4>

				</div>

				<div class="card-body">
							<ul class="list-unstyled mb-0">
									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-info" style="width: 25%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-danger" style="width: 13%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-success" style="width: 44%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 11%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 7%">
								</div>
							</div>
									</li>
							</ul>
				</div>
			</div>
						<!-- /app status -->

			</div>

      <div class="col-mdd-2">

  			</div>

        <div class="col-mdd-2">
    			</div>

          <div class="col-mdd-2">

      			</div>

            <div class="col-mdd-2">

							<div class="card">
								<div class="card-header header-elements-inline">
									<h4 class="card-title">Беззалоговые кредиты</h4>

								</div>

								<div class="card-body">
											<ul class="list-unstyled mb-0">
													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-info" style="width: 25%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-danger" style="width: 13%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-success" style="width: 44%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 11%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 7%">
												</div>
											</div>
													</li>
											</ul>
								</div>
							</div>

        			</div>
  </div>
	<!--/ROW  -->
	<div class="row" >

		<div class="col-mdd-2">

			<!-- App status -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h4 class="card-title">Авто кредиты</h4>

				</div>

				<div class="card-body">
							<ul class="list-unstyled mb-0">
									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-info" style="width: 25%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-danger" style="width: 13%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-success" style="width: 44%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 11%">
								</div>
							</div>
									</li>

									<li class="mb-2">
											<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
							<div class="progress" style="height: 0.375rem;">
								<div class="progress-bar bg-primary" style="width: 7%">
								</div>
							</div>
									</li>
							</ul>
				</div>
			</div>
						<!-- /app status -->

			</div>

			<div class="col-mdd-2">

				</div>

				<div class="col-mdd-2">
					</div>

					<div class="col-mdd-2">

						</div>

						<div class="col-mdd-2">

							<div class="card">
								<div class="card-header header-elements-inline">
									<h4 class="card-title">Авто кредиты</h4>

								</div>

								<div class="card-body">
											<ul class="list-unstyled mb-0">
													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-info" style="width: 25%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-danger" style="width: 13%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-success" style="width: 44%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 11%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 7%">
												</div>
											</div>
													</li>
											</ul>
								</div>
							</div>

							</div>
	</div>
	<!-- /ROW  -->

	<div class="row" >

		<div class="col-mdd-2">

			</div>

			<div class="col-mdd-2">

				</div>

				<div class="col-mdd-2">
					</div>

					<div class="col-mdd-2">

						</div>

						<div class="col-mdd-2">

							<div class="card">
								<div class="card-header header-elements-inline">
									<h4 class="card-title">Отделения</h4>

								</div>

								<div class="card-body">
											<ul class="list-unstyled mb-0">
													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень быстро <span class="text-muted ml-auto">25%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-info" style="width: 25%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Быстро<span class="text-muted ml-auto">13%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-danger" style="width: 13%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Нормально <span class="text-muted ml-auto">44%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-success" style="width: 44%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Медленно <span class="text-muted ml-auto">11%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 11%">
												</div>
											</div>
													</li>

													<li class="mb-2">
															<div class="d-flex align-items-center mb-1">Очень медленно <span class="text-muted ml-auto">7%</span></div>
											<div class="progress" style="height: 0.375rem;">
												<div class="progress-bar bg-primary" style="width: 7%">
												</div>
											</div>
													</li>
											</ul>
								</div>
							</div>

							</div>
	</div>
	<!-- /ROW -->

			</div>



      <!-- /dashboard content -->


@endsection
