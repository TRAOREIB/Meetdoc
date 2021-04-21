<?php $__env->startSection('content'); ?>
<?php $__env->startSection('script'); ?>
  

<!--        <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>-->
        <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('js/dataTables.min.js')); ?>"></script>
<!--        <script type="text/javascript" src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>

        <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">-->
        <link rel="stylesheet" href="<?php echo e(asset('css/dataTables.min.css')); ?>">
<!--        <link rel="stylesheet" href="<?php echo e(asset('css/all.css')); ?>">-->

 <?php $__env->stopSection(); ?>


    <body>

        <div class="" style="">
            <h3 class="titreform">Liste des Medecins</h3>
            <div class="titrebarform col-sm-6" ></div>
        </div>
        <br>
        
        <div class="" style="">
            <div class="col-sm-10 col-xs-12" >
                <div class="table-responsive">
                    <table class="table table-striped table-condensed" id="table">
                        <thead>
                            <tr style="background-color:#2a6496;color: #FFFFFF;">
                                <th>Titre</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Specialite</th>
                                <th>Telephone</th>
                                <th>Structure</th>
                                <th>Disponibilite</th>


                            </tr>
                        </thead>
                        <tbody>

                            <?php $__currentLoopData = $medecin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $med): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($med->titre); ?></td>
                                <td><?php echo e($med->nom); ?></td>
                                <td><?php echo e($med->prenom); ?></td>
                                <td><?php echo e($med->specialite); ?></td>
                                <td><?php echo e($med->telephone); ?></td>
                                <td></td>

                                <td title="Disponibilite">
                                    <form method="GET" action="<?php echo e(route('disponibilite.create')); ?>">
                                        <?php echo e(csrf_field()); ?>

                                        <input type="submit" style="border: 0px;background-color:" class="btn btn-primary" value="Ajouter disponibilité">
                                        <input type="hidden" value="<?php echo e($med->id); ?>" name="idmedecin">
                                        <input type="hidden" value="<?php echo e($med->nom); ?>" name="nom">
                                        <input type="hidden" value="<?php echo e($med->prenom); ?>" name="prenom">
                                        <input type="hidden" value="<?php echo e($med->titre); ?>" name="titre">
                                        <input type="hidden" value="" name="idstructure">

                                    </form>
                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!--  fin de la liste-->

    </body>

    <div class="modal" id="confirmationta">
        <div class="modal-dialog modal-xs">
            <div class="modal-content" style="background-color :">
                <div class="modal-body">
                    <span class="glyphicon glyphicon-exclamation-sign" style="color: #f0ad4e"><label > Supprimer cet &eacutelement ? </label></span>
                </div>
                <div class="modal-footer">
                    <a href="#"  class="btn btn-success" data-di  xsiss="modal"><span class="glyphicon glyphicon-ok-sign"></span> OUI</a>
                    <a href="#"  class="btn btn-danger" data-di  xsiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> NON</a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            $('#table').DataTable();
        });

    </script>
    
    <?php $__env->stopSection(); ?>

    


<?php echo $__env->make('gentelella-master2.production.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\montest6\resources\views/disponibilite/liste.blade.php ENDPATH**/ ?>