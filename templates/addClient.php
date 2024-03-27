<section>
    <div class="container-fluid w-75">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8 m-auto">
                <h5 class="mt-5 md-3 text-uppercase">Dane klienta</h5>
                <div class="mt-4 card">
                    <div class="card-body">
                        <form action="" method="POST" id="clientsAdding">
                            <!--Imię-->
                            <label for="clientName" class="form-label">Imię</label>
                            <input type="text" name="clientName" class="form-control" id="clientName" required>
                            <!--Nazwisko-->
                            <label for="clientSurname" class="form-label mt-2">Nazwisko</label>
                            <input type="text" name="clientSurname" class="form-control" id="clientSurname" required>
                            <!--Numer telefonu-->
                            <label for="clientPhone" class="form-label mt-2">Numer telefonu</label>
                            <input type="text" name="clientPhone" class="form-control" id="clientPhone" required>
                            <div class="text-center mt-4">
                                <button class="btn btn-success" type="submit" name="addUserBtn" value="addUserBtn">Dodaj klienta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>