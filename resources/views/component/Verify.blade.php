<div class="login_register_wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-10">
                <div class="login_wrap">
                    <div class="padding_eight_all bg-white">
                        <div class="heading_s1">
                            <h3>Verification</h3>
                        </div>
                        <div class="form-group mb-3">
                            <input id="code" type="text" required="" class="form-control" name="email"
                                placeholder="Verification Code">
                        </div>
                        <div class="form-group mb-3">
                            <button onclick="Verify()" type="submit" class="btn btn-fill-out btn-block"
                                name="login">Confirm</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    async function Verify() {
        let code = document.getElementById('code').value;
        let email = sessionStorage.getItem('email');

        if (code.length === 0) {
            alert("Code Required!");
        } else {
            let res = await axios.get("/VerifyLogin/"+email+"/"+code);
            if (res.status === 200) {

            }
        }
    }
</script>
