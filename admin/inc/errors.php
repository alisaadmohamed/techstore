              <?php if ($session->has("errors")): ?>
                                    <div class="alert alert-danger">
                                    <?php foreach ($session->get("errors") as $error): ?>

                                        <p class="mb-0"><?=$error;?></p>

                                    <?php endforeach; $session->remove('errors');?>

                                    </div>
                                   <?php endif;?>