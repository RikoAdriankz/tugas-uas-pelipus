<!-- Delete Modal -->
<div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Hapus Project</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add a form for deleting a project -->
                <form method="POST" action="<?php echo e(route('projects.destroy', ['project' => $project->id])); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?> <!-- Use the DELETE method for deleting -->

                    <p>Apakah Anda yakin ingin menghapus proyek "<?php echo e($project->name); ?>"?</p>

                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Administrator\Pictures\uas-semseter3-master\resources\views/dashboard/delete/index.blade.php ENDPATH**/ ?>