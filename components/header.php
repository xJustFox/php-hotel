<header>
    <div class="container-fluid bg-primary  py-3 ">
        <div class="row justify-content-between align-items-center ">
            <div class="col">
                <h1 class="m-0">HOTELS</h1>
            </div>
            <div class="col text-end ">
                <form class="m-0" action="./index.php" method="get">
                <select class="form-select-sm" name="searchStar" style="width: 155px;">
                        <option value="">Scegli le stelle</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <select class="form-select-sm" name="searchParking" style="width: 155px;">
                        <option value="">Scegli parcheggio</option>
                        <option value="true">Il parcheggio è incluso</option>
                        <option value="false">Il parcheggio non è incluso</option>
                    </select>
                    <button class="form-control-sm " type="submit">Cerca</button>
                </form>
            </div>
        </div>
    </div>
</header>