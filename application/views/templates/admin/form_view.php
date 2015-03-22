<div class="row">
    <div class="col-lg-12"> 
        <div class="col-lg-6">

            <form role="form" method="post" action="<?php echo site_url('welcome/addUser');?>">
                <div class="form-group">
                    <label>Lastname</label>
                    <input class="form-control"  name="lastname"placeholder="Lastname">

                </div>

                <div class="form-group">
                    <label>Firstname</label>
                    <input class="form-control" name="firstname" placeholder="Firstname">
                </div>

                <div class="form-group">
                    <label>Contact</label>
                    <input type="numeric" class="form-control" name="contact" placeholder="number">
                </div> 

                <div class="form-group">
                    <label>Selects district</label>
                    <select class="form-control" name="district" >
                        <option></option>
                        <option>Agoe</option>
                        <option>Adidogomé</option>
                        <option>Atikoumé</option>
                        <option>Hédzranawoe</option>
                        <option>Klikamé</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Home location</label>
                    <input type="numeric" name="mapposition" class="form-control" placeholder="Firstname">
                </div>

                <div id="map"  class="form-group" style="height: 400px">

                </div>

                <button type="submit" class="btn btn-default">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>

            </form>
        </div>
    </div>

</form>
</div>
</div>
