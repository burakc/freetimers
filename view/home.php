<?php require __DIR__ . '/layouts/header.php'; ?>
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <form action="/?calculate" method="post">
            <div class="card-body">
                <h5 class="card-title mb-4 text-center">How many bags of topsoil needed for my garden?</h5>

                <h6 class="card-title mb-3 text-center">Measurement Unit</h6>
                
                <div class="d-flex flex-row"> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="measurement" value="metre" checked> <span> Metres </span> 
                    </label> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="measurement" value="feet"> <span> Feets </span> 
                    </label> 
                    <label class="radio text-center"> 
                        <input type="radio" name="measurement" value="yard"> <span> Yards </span> 
                    </label> 
                </div>

                <h6 class="card-title mb-3 mt-3 text-center">Depth Measurement Unit</h6>
                
                <div class="d-flex flex-row"> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="depth-measurement" value="centimetre" checked> <span> Centimetres </span> 
                    </label> 
                    <label class="radio mr-1 text-center"> 
                        <input type="radio" name="depth-measurement" value="inch"> <span> Inches </span> 
                    </label> 
                </div>

                <h6 class="information mt-4">Please provide following size information about your garden:</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="number" name="width" placeholder="Your Garden Width"> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="number" name="length" placeholder="Your Garden Lenght"> 
                        </div>
                    </div>
                </div>

                <!--
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="number" name="depth" placeholder="Your Garden Depth (Default by 1.4)" value="1.4"> 
                        </div>
                    </div>
                </div>
                -->

                <button class="btn btn-primary btn-block confirm-button">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php require __DIR__ . '/layouts/footer.php'; ?>