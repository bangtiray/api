<section id="contact" class="wow fadeInUp">
              <div class="container">
                <div class="section-header">
                  <h2>Ingin Mengajukan</h2>
                  <p>Isi Form ini untuk melakukan pengajuan</p>
                </div>


                  <div class="container">
                    <div class="form users-remove-record-model" id="pengajuan" method="post">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="alert alert-danger" style="display:none"></div>
                      <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                          <input type="hidden" name="image_path" id="image_path" value="{{route('frontend.index')}}/storage/img/blog/{!! $pages->featured_image !!}">
                          <input type="hidden" name="url_site" id="url_site" value="{{url()->current()}}">
                          <div class="form-group col-md-6">
                            <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                          <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="user_address"  id="user_address" rows="5" data-rule="required" data-msg="Please write Your Address" placeholder="Address"></textarea>
                          <div class="validation"></div>
                        </div>
                        <div class="form-row">
                       
                        <div class="form-group col-md-6">
                            <select name="provinsi" id="provinsi" class="form-control tags box-size" data-rule="required" data-msg="Please Select Province" data-dependent="kabupaten" >
                              <option value="" selected>-- Province --</option>
                              @foreach($provinsi as $prov)
                              <option value="{!! $prov->id_prov !!}">{!! $prov->nama !!}</option>
                              @endforeach
                            </select>
                            <div class="validation"></div>
                          </div>
                          <div class="form-group col-md-6">
                            <select name="kabupaten" id="kabupaten" class="form-control tags box-size" data-msg="Please Select Kabupaten" data-dependent="kecamatan">
                                
                            </select>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6">
                            <select name="kecamatan" id="kecamatan" class="form-control tags box-size" data-msg="Please Select Province" data-dependent="kelurahan" >
                            
                            </select>
                            <div class="validation"></div>
                          </div>
                          <div class="form-group col-md-6">
                            <select name="kelurahan" id="kelurahan" class="form-control tags box-size" data-msg="Please Select Kabupaten">
                                
                            </select>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="+62" data-rule="phone" data-msg="Please enter a valid Phone Number" />
                            <div class="validation"></div>
                          </div>
                        
                        <div class="text-center">
                          <button type="button" class="btn btn-primary btn-block desabled" id="kirimPengajuan">
                                            Submit
                          </button>
                        </div>
                      </form>
                    </div>

              </div>
            </section>