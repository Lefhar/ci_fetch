<footer>
<nav class="navbar navbar-expand-sm bg-jarditou navbar-jarditou">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">mention légales</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("horaires.html"); ?>">Horaires</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url("sitemap.html"); ?>">plan du site</a></li>
                    </ul>
        </nav>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script>


        document.querySelector("#select1").addEventListener('change', function (){

                //url api json sous catégorie
                let url =`http://localhost/ci_fetch/categorie/cat/${this.value}`;
                fetch(url).then(response=> response.json().then(data=> {
                         //console.log(data)
                        let affichage ='<select id="cat_id"  name="pro_cat_id" class="form-control">';
                        for (let cat of data){
                            affichage += `<option id="${cat.cat_id}">${cat.cat_nom}</option>`;
                        }
                        affichage +="</select>";
                        document.querySelector("#sous_cat").innerHTML = affichage;
                    })
                ).catch((err) => console.log('error api : '+err));



        });

    </script><script src="<?php echo base_url("assets/js/script.js?id=".date('si').""); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</footer>
</body>
</html>