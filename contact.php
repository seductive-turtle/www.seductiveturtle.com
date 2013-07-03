<?php require __DIR__ . '/header.php'; ?>
   <!-- Contact Us -->
   <div class="contactus">
      <div class="row">
         <div class="span4">
            <!-- Contact us title -->
            <h2>Contact Us</h2>
         </div>
         <div class="span8">
            <!-- Contact us para -->
            <p>Are you looking for some custom work, or some help with a piece of code we've developed? Fill out the form below!</p>
         </div>
      </div>
      <hr />
      <div class="contact">
         <div class="row">
            <div class="span6">
               <div class="form">
                 <form class="form-horizontal" action="/mail">
                     <div class="control-group">
                       <label class="control-label" for="name">Name</label>
                       <div class="controls">
                         <input type="text" class="input-medium" name="name" id="name">
                       </div>
                     </div>
                     <div class="control-group">
                       <label class="control-label" for="email">Email</label>
                       <div class="controls">
                         <input type="text" class="input-medium" name="email" id="email">
                       </div>
                     </div>
                     <div class="control-group">
                       <label class="control-label" for="website">Website</label>
                       <div class="controls">
                         <input type="text" class="input-medium" name="website" id="website">
                       </div>
                     </div>
                     <div class="control-group">
                       <label class="control-label" for="comment">Comment</label>
                       <div class="controls">
                         <textarea class="input-madium" name="comment" id="comment" rows="5"></textarea>
                       </div>
                     </div>
                     <div class="form-actions">
                       <button type="submit" class="btn btn-danger">Submit</button>
                       <button type="reset" class="btn">Reset</button>
                     </div>
                 </form>
               </div>
            </div>
            <div class="span6">
               <div class="gmap">
                  <iframe height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=San+Diego,+CA&amp;aq=0&amp;oq=san+diego&amp;sll=37.269174,-119.306607&amp;sspn=15.628108,33.815918&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=San+Diego,+California&amp;ll=32.715377,-117.157173&amp;spn=0.050551,0.042915&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
               </div>
               <hr />
               <div class="address">
                  <div class="row">
                     <div class="span3">
                        <address>
                          <span class="color bold company">Seductive Turtle, Inc.</span><br>
                          San Diego, CA 92101<br>
                        </address>
                     </div>
                     <div class="span3">
                        <address>
                          <span class="color bold company">Aaron Scherer</span><br>
                          <a href="mailto:#">aequasi@gmail.com</a><br>
                          <abbr title="Phone">P:</abbr> 612.669.0287
                        </address>
                     </div>
                  </div>
               </div>
            </div>
         </div>         
      </div>
   </div>
   
<?php require __DIR__ . '/footer.php'; ?>
