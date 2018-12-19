<!-- contact -->
<form method="POST" action="../private/process.php">
	<div class="row">
			<div class="col-sm-3">
				<label for="firstName">First Name *</label>
			</div>
			<div class="col-sm-9 ">  
				<input type="text" class="form-control mb-3" id="firstName" placeholder="First Name" name="firstName" required>
			</div>
	</div>

	<div class="row">
			<div class="col-sm-3">
				<label for="lastName">Last Name *</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control mb-3" id="lastName" placeholder="Last Name" name="lastName" required>
			</div>
	</div>

	<div class="row">
			<div class="col-sm-3">
				<label for="exampleInputEmail1">Email address *</label>
			</div>
			<div class="col-sm-9">  
				<input type="email" class="form-control mb-3" id="exampleInputEmail1" name="email" placeholder="Email" required>
			</div>
	</div>

    <div class="row">
			<div class="col-sm-3">
				<label for="country">Country *</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control mb-3" id="country" name="country" placeholder="Country" required>
			</div>
	</div>
	<div class="row">
			<div class="col-sm-3">
				<label for="telephone">Telephone</label>
			</div>
			<div class="col-sm-9">  
				<input type="text" class="form-control mb-3" id="telephone" name="phone" placeholder="000-000-0000">
			</div>
	</div>
    
    <div class="row">
			<div class="col-sm-3">
				<label for="product">Nerium product you use</label>
			</div>
			<div class="col-sm-9">  
                <input type="text" class="form-control mb-3" id="product" name="product" >
				
			</div>
	</div>	
	<div class="row">
			<div class="col-sm-3">
				<label for="message">Message</label>
			</div>
			<div class="col-sm-9">  
				<textarea placeholder="Message" class="form-control mb-3" name="message" id="message" rows="5"></textarea>
			</div>
	</div>	

    <div class="row">
        <div class="col-12 mb-5">  
            Enter the Captcha code * &nbsp;<input name="captcha" type="text">&nbsp;
            <img src="captcha.php" /><br/>
    	</div>
		<div class="col-12">
			<button type="submit" class="NSC-btn form-control">SUBMIT</button>
		</div>
	</div>
</form>
