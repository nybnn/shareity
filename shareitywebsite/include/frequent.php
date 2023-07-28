  <div class="faq-header">
    <br>
    <h2 class="label-web" style="color:#04ADED">Still have some questions?</h2>
  </div>
  <div class="row-faq">
    <div class="col-lg-12 col-md-12 col-xs-12 ">
      <section class="accordion-section clearfix mt-3" aria-label="Question Accordions">
        <div class="container">
          <div class="panel-group accordion" role="tablist" aria-multiselectable="true">
            <?php foreach ($questions as $data) { ?>
            <div class="panel panel-default" style="text-align: center;">
              <div class="panel-heading p-1 mb-1" role="tab" id="<?= $data['labelledby'] ?>">
                <h4 class="faq-title">
                  <a href="#" class="" role="button" data-toggle="collapse" data-target="#<?= $data['id'] ?>"
                    aria-expanded="false" aria-controls="<?= $data['id'] ?>">
                    <?= $data['question'] ?>
                  </a>
                </h4>
              </div>
              <!-- panel-collapse collapse  -->
              <div id="<?= $data['id'] ?>" class="collapse" role="tabpanel"
                aria-labelledby="<?= $data['labelledby'] ?>">
                <div class="faq-body px-3 mb-4">
                  <p><?= $data['answer'] ?> </p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
    </div>
  </div>
  <br><br><br>
  <p class="end-faq">Can't find what you're looking for? <br>
    Start a <a class="links-faq" href="#" onclick="window.HubSpotConversations.widget.open();">Live Chat</a>
    or <a class="links-faq" href="/contact"> Contact Us</a><br><br>
  </p>