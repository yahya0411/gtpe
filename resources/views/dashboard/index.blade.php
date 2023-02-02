@extends("layouts.master")


@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>250</h3>

                    <p>CLIENTS</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-person"></i>
                </div>
                <a href="{{url("materiels")}}" class="small-box-footer">Plus info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>720</h3>

                    <p>TPE</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-contacts"></i>
                </div>
                <a href="{{url("materiels")}}" class="small-box-footer">Plus info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>40</h3>

                    <p>TPE EN PANNE</p>
                </div>
                <div class="icon">
                    <i class="ion ion-podium"></i>
                </div>
                <a href="{{url("opportuinites")}}" class="small-box-footer">Plus info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>5</h3>

                    <p>CLIENTS RESELIER</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="#" class="small-box-footer">Plus info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <section class="col-lg-6 connectedSortable  ui-sortable-handle">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chart-pie mr-1"></i> Opportunites</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="donutChart" style="width:200%;max-width:700px"></canvas>
                </div>

            </div>

        </section>

        <section class="col-lg-6 connectedSortable  ui-sortable-handle">


            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-chart-bar mr-1"></i> Montants des opportuintes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="montant" style="width:100%;max-width:600px"></canvas>
                </div>

            </div>

        </section>

    </div>

@endsection

