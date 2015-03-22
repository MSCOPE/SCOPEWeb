<?php $url = base_url() . 'index.php'; ?>
<div class="row">
    <div class=" col-lg-4">
        <div style="padding:15px;" class="panel panel-default">
            <h3 class="text-center" style="margin-bottom: 10%">ILS NOUS ONT FAIT CONFIANCE</h3>	
            <div >
                <?php include 'partenaires_view.php'; ?>
            </div><!-- row -->
        </div>
    </div>

    <div class="col-lg-8">
        <div class="nested-row centered panel-body">
            <div class="col-lg-6 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>Cotation bourse:</strong> <br/> <br/> 
                        <?php include 'bourse_view.php'; ?> <br/> 
                    </div>
                </div> <!--col-lg-8-->
            </div>
            <div class="col-lg-6 ">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <strong>Valeurs liquidatives:</strong> <br/> <br/> 
                        <?php include 'fonds_view.php'; ?> <br/> 
                    </div>
                </div> <!--col-lg-8-->
            </div> <!--col-lg-8-->
        </div> <!-- row -->
        <div style="margin-top: 10px"class=" panel panel-default">
            <div class="nested-row centered panel-body">
                <h3 style="padding:15px" class="text-center" >EN SAVOIR PLUS</h3>
                <div class="col-lg-4 ">
                    <a href="<?php echo $url . "/welcome/actionnariat" ?>"> <h4 class="text-info:primary text-center">ACTIONNARIAT</h4> </a>
                    <p class="text-justify">La SGI-TOGO est la premiere Société de Gestion et d'intermediation de droit togolais agréée par le Conseil Regionnal de l'Epargne Publique et des Marchés Financiers (CREPMF) de l'Union Economique et Monétaire Ouest Africain (UEMOA)
                        pour les metiers liés aux marchés financiers et aux opérations sur le capital des entreprises. 
                    </p>
                </div><!-- col-lg-4 -->

                <div class="col-lg-4 ">
                    <a href="<?php echo $url . "/welcome/service" ?>"> <h4 class="text-info:primary text-center">ACTIVITES</h4> </a>
                    <p class="text-justify" >La SGI-TOGO propose à sa clientèle une gamme variée de services notamment: le conseil en placement, le courtage, la gestion de portefeuille, la tenue de comptes, la conservation et l'ingénierie financière.</p>
                </div><!-- col-lg-4 -->

                <div class="col-lg-4 ">            
                    <h4 class="text-primary text-center">FONCTIONNEMENT</h4>
                    <p class="text-justify">Intermediation: Nous ouvrons automatiquement un compte titre/espèce à tout nouveau client de la SGI-TOGO.</p>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div>
    </div>
</div>