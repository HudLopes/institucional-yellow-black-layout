<style type="text/css">

.news{
	text-align: right;
	font-size: 1.5em;
}

.news2 {
	 text-align: left;
}

@media (max-width: 991px){
	.newsdisable{
		display: none;
	}
	.news {
    text-align: center;
    font-size: 1.5em;
}
.form-control {
	text-align: center;
    display: block;
    width: 50%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.news2 {
	 text-align: center;
	 padding-left: 35%;
}
}

</style>

<div class="row" style="margin-bottom: -75px">

	<div class="col-md-7" style="background-image: url(images/3d-left.png); height: 18vh; padding-top: 6.5vh">

		<div class="row">
			<div class="col-sm-8 news">
				Continue informado com nossa newsletter
			</div>
			<div class="col-sm-4 news2">
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
			</div>
		</div>

	</div>
	<div class="col-md-1 newsdisable" style="background-image: url(images/3d.png); height: 18vh"></div>
	<div class="col-md-4 newsdisable" style="background-image: url(images/3d-right.png); height: 18vh"></div>
</div>
