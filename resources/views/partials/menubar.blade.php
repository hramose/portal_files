<aside id="sidebar">
	<div class="sidenav-outer">
		<div class="side-menu">
			<div class="menu-body">
				<ul class="nav nav-pills nav-stacked sidenav">
					<!-- <li >
						<a href="/home">
						<span class="glyphicon glyphicon-home"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a href="/home">{{ Lang::get(\Session::get('lang').'.dashboard') }}</a></li>
						</ul>
					</li> -->
					<li >
						<a href="/will_apply">
						<span class="glyphicon glyphicon-pencil"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a href="/will_apply">Apply For Will</a></li>
						</ul>
					</li>
					<!-- <li >
						<a href="/typography">
						<span class="glyphicon glyphicon-text-size"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a  href="/typography">{{ Lang::get(\Session::get('lang').'.typography') }}</a></li>
						</ul>
					</li>
					<li >
						<a href="/grid">
						<span class="glyphicon glyphicon-th-large"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a href="/grid">{{ Lang::get(\Session::get('lang').'.grid') }}</a></li>
						</ul>
					</li>
					<li >
						<a href="/table">
						<span class="glyphicon glyphicon-list"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a  href="/table">{{ Lang::get(\Session::get('lang').'.table') }}</a></li>
						</ul>
					</li>
					<li >
						<a href="/form-elements">
							<span class="glyphicon glyphicon-equalizer"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li class="sidemenu-header">{{ Lang::get(\Session::get('lang').'.form') }}</li>
							<li><a href="/form-elements">{{ Lang::get(\Session::get('lang').'.elements') }}</a></li>
							<li><a href="/form-components">{{ Lang::get(\Session::get('lang').'.components') }}</a></li>
						</ul>
					</li>
					<li >
						<a href="button">
						<span class="glyphicon glyphicon-cloud-download"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li class="sidemenu-header">{{ Lang::get(\Session::get('lang').'.user_interface') }}</li>
							<li><a href="button">{{ Lang::get(\Session::get('lang').'.buttons') }}</a></li>
							<li><a href="dropdown">{{ Lang::get(\Session::get('lang').'.dropdown') }}</a></li>
							<li><a href="icons">{{ Lang::get(\Session::get('lang').'.icons') }}</a></li>
							<li><a href="panels">{{ Lang::get(\Session::get('lang').'.panels') }}</a></li>
							<li><a href="alerts">{{ Lang::get(\Session::get('lang').'.alerts') }}</a></li>
							<li><a href="progressbars">{{ Lang::get(\Session::get('lang').'.progressbars') }}</a></li>
							<li><a href="pagination">{{ Lang::get(\Session::get('lang').'.pagination') }}</a></li>
							<li><a href="other-elements">{{ Lang::get(\Session::get('lang').'.other_elements') }}</a></li>
						</ul>
					</li>
					<li >
						<a href="chartjs">
						<span class="glyphicon glyphicon-signal"></span>	
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li class="sidemenu-header">{{ Lang::get(\Session::get('lang').'.charts') }}</li>	
							<li><a href="chartjs">Chart</a></li>
							<li><a href="c3chart">C3Chart</a></li>
						</ul>
					</li>
					<li > 
						<a href="calendar">
						<span class="glyphicon glyphicon-calendar"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a href="calendar">{{ Lang::get(\Session::get('lang').'.calendar') }}</a></li>
						</ul>
					</li>
					<li >
						<a href="inbox">
						<span class="glyphicon glyphicon-envelope"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li class="sidemenu-header">{{ Lang::get(\Session::get('lang').'.mail') }}</li>
							<li><a href="inbox">{{ Lang::get(\Session::get('lang').'.inbox') }}</a></li>
							<li><a href="compose">{{ Lang::get(\Session::get('lang').'.compose') }}</a></li>
						</ul>
					</li>
					<li > 
						<a href="invoice">
						<span class="glyphicon glyphicon-list-alt"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a href="invoice">{{ Lang::get(\Session::get('lang').'.invoice') }}</a></li>
						</ul>
					</li>
					<li > 
						<a href="docs">
						<span class="glyphicon glyphicon-credit-card"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li><a href="docs">Docs</a></li>
						</ul>
					</li>
					<li >
						<a href="blank">
						<span class="glyphicon glyphicon-duplicate"></span>
						</a>
						<ul class="nested-dropdown animated fadeIn">
							<li class="sidemenu-header">{{ Lang::get(\Session::get('lang').'.pages') }}</li>
							<li><a href="blank">{{ Lang::get(\Session::get('lang').'.blankpage') }}</a></li>
							<li><a href="login">{{ Lang::get(\Session::get('lang').'.login') }}</a></li>
							<li><a href="signup">{{ Lang::get(\Session::get('lang').'.singup') }}</a></li>
							<li><a href="404-page">{{ Lang::get(\Session::get('lang').'.404page') }}</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</div>
		@include('partials.sidebar-widgets.sidebar-widgets')
	</div>
</aside>



<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Who is competent to make a will?</h4>
        </div>
        <div class="modal-body">
          <p>Everyone 16 years old and over, unless at the time of making the will they are mentally incapable of appreciating the consequence of their actions. </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Who is competent to act as a witness to a will?</h4>
        </div>
        <div class="modal-body">
          <p>Anyone who is 14 years old and over and who at the time that they witness the will is competent to give evidence in court. A beneficiary to a will should not sign as a witness, because they will then be disqualified from receiving any benefit from that will. There are some exceptions to this rule. Consult your legal representative for more information in this regard.  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



    <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">What are the requirements for a valid will? </h4>
        </div>
        <div class="modal-body">
			          <p><ul style=""><li style=""><font color="#818181">All wills must be in writing. They can be written by hand, typed or printed.</font></li><li style=""><font color="#818181">The testator (person making the will) must sign at the end of the last page of the will.</font></li><li style=""><font color="#818181">The testator must sign all other pages of the will anywhere on the page.</font></li><li style=""><font color="#818181">The testator must sign the will in the presence of two or more competent witnesses.</font></li><li style=""><font color="#818181">The witnesses must attest and sign the will in the presence of the testator and of each other.</font></li><li style=""><font color="#818181">Wherever signatures are required, a full and normal signature must be attached and not mere initials.</font></li><li style=""><font color="#818181">Persons completing blanks in the will or signing as witnesses or their spouses are disqualified from benefiting from a Will.</font></li></ul>  </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">What are the requirements for a valid will if I cannot sign my name? 
</h4>
        </div>
        <div class="modal-body">
          <p>
           <br>
             You may ask someone to sign the will on your behalf or you can sign the will by the making of a mark (for example a thumbprint or a cross). If you make a mark, or get someone to sign on your behalf, you must follow these requirements:&nbsp;
           </br>
          <ul style=""><li style=""><font color="#818181">If it was made after 1 January 1954, the will must be in writing. It can be written by hand, typed or printed.</font></li><li style=""><font color="#818181">The testator must sign the will at the end of the last page by making a mark, or if someone signs on their behalf, this other person must sign at the end of the last page in the presence and by the direction of the testator.</font></li><li style=""><font color="#818181">The mark or the signature of the other person signing on behalf of the testator must be made in the presence of two or more competent witnesses and a commissioner of oaths.</font></li><li style=""><font color="#818181">The witnesses must attest and sign the will in the presence of the testator/ and of each other and if the will is signed by the other person, also in the presence of that person and a commissioner of oaths.</font></li><li style=""><font color="#818181">If the will consists of more than one page, every page except the last one must be signed by the testator or by the person signing on their behalf anywhere on the page.</font></li><li style=""><font color="#818181">A commissioner of oaths must certify that they are satisfied as to the identity of the testator and that the will is the will of the testator.</font></li><li style=""><font color="#818181">The commissioner of oaths must sign a certificate and each page of the will, anywhere on the page.</font></li></ul> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">What if I want to amend my will? </h4>
        </div>
        <div class="modal-body">
          <p>Amendments to a will can only be made while executing a will or after the date of execution of the will. Amendments to a will must comply with the same requirements for a valid will (listed above). When amending a will, it is not necessary for the same witnesses who signed the original to sign the updated will. 
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Must I amend my will after divorce? </h4>
        </div>
        <div class="modal-body">
          <p>A bequest to your ex in your will, which was made before your divorce, will not necessarily fall away after the divorce. The Wills Act says that, unless you specifically provide otherwise, a bequest to your divorced spouse will be cancelled if you die within three months of the divorce. This gives a divorced person three months after the divorce in which to amend their will. Should you not change your will within three months after your divorce, your divorced spouse will benefit as indicated in the will.
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


   <!-- Modal -->
  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">What will happen if I do not leave a will?  </h4>
        </div>
        <div class="modal-body">
          <p>If you die without leaving a will or a valid will, your estate will be split up according to the Intestate Succession Act, no. 81 of 1987. The estates of people who die intestate and whose estates are governed by the principles of customary law must be reported to the Magistrate for the area in which the person was resident at the time of their death. The local magistrate should be consulted on how an estate that is subject to customary law will be dealt with.
         </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal7" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Our Costs For Preparing A Will  </h4>
        </div>
        <div class="modal-body">
         <p>Unlike many of the larger  trust service providers, our affordable rates are not subject to the  condition that you need to appoint us to act as the executor of your will.</p>
         <p><strong>Please see our price guide  below:</strong></p>
         <tbody>
         <tr>
              <td class="col-sm-6" valign="top"><p>Simple individual will</p></td>
              <td class="col-sm-6" valign="top"><p>R200.00</p></td>
            </tr>
            <tr>
              <td class="col-sm-6" valign="top"><p>Simple joint and mutual will</p></td>
              <td class="col-sm-6" valign="top"><p>R250.00</p></td>
            </tr>
            <tr>
              <td class="col-sm-6" valign="top"><p>Will incorporating a testamentary trust</p></td>
              <td class="col-sm-6" valign="top"><p>R400.00</p></td>
            </tr>
            <tr>
              <td class="col-sm-6" valign="top"><p>Will with detailed heirs    and legatees</p></td>
              <td class="col-sm-6" valign="top"><p>R400.00</p></td>
            </tr>
            <tr>
              <td class="col-sm-6" valign="top"><p>Simple <em>Sharia</em> will</p></td>
              <td class="col-sm-6" valign="top"><p>R250.00</p></td>
            </tr>
          </tbody>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>