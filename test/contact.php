<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">

/* Form Validation*/

function validation()
{	
	
	if(document.getElementById("name").value == "")
	{
		window.alert("Please insert your Full Name!");
		document.getElementById("name").focus();
		return false;
	}
	else if(document.getElementById("phone").value == "")
	{
		window.alert("Please insert your Contact Number!");
		document.getElementById("phone").focus();
		return false;
	}
	
	else if(document.getElementById("country").value == "")
	{
		window.alert("Please Choose your Country!");
		document.getElementById("country").focus();
		return false;
	}
	
	
	else if(document.getElementById("mes").value == "")
	{
		window.alert("Please insert your Message!");
		document.getElementById("mes").focus();
		return false;
	}
	
	/*else if(document.getElementById("mem_contact_no").value == "")
	{
		window.alert("Please insert your Contact Number!");
		document.getElementById("mem_contact_no").focus();
		return false;
	}
	
	else if(document.getElementById("email").value == "aaa@aaa.com" || document.getElementById("email").value == "" )
	{
		window.alert("Please insert your Email Address!");
		document.getElementById("mem_email").focus();
		return false;
	}*/	
	
	else if(document.getElementById("email").value == "" )
	{
		window.alert("Please insert your Email Address!");
		document.getElementById("email").focus();
		return false;
	}
	
	else if(!echeck(document.getElementById("email").value))
	{
		document.getElementById("email").value = "";
		document.getElementById("email").focus();
		return false;
		
	}	
	
	
	else if(document.getElementById("subject").value == "")
	{
		window.alert("Please insert your Subject!");
		document.getElementById("subject").focus();
		return false;
	}
	
	else if(document.getElementById("mess").value == "")
	{
		window.alert("Please insert your Msg!");
		document.getElementById("mess").focus();
		return false;
	}
	
	else
	{
		return true;
	}
	
}
function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}

</script>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="73%" style="padding:0px 0px 10px 18px"><img src="images/contact.png" width="167" height="28" /></td>
  </tr>
  
  
  <tr>
    <td><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="0" class="main_text">
          <tr>
            <td colspan="3">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="contact_title"><b>EXPRESS HOLIDAYS </b></td>
            </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td valign="top">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><span style="color:#000000">Address</span></td>
            <td valign="top">:</td>
            <td>G-Nat Tower,116-117 D.I.T Extension Road.<br />
Level-6, Suite-6 / B,Dhaka-1000, Bangladesh.</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span style="color:#000000">Phone</span></td>
            <td>:</td>
            <td>8802 7191448</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span style="color:#000000">Fax</span> </td>
            <td>:</td>
            <td>8802 8319624</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><span style="color:#000000">E-mail</span> </td>
            <td valign="top">:</td>
            <td><a href="mailto:expressholidaysbd@gmail.com" target="_blank">expressholidaysbd@gmail.com</a><br />
			<a href="mailto:zakir.onlyone@gmail.com" target="_blank">zakir.onlyone@gmail.com</a>			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><span style="color:#000000">Web</span></td>
            <td>:</td>
            <td><a href="#">www.expressholidaysbd.com</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><span style="color:#000000">Hotlines</span></td>
            <td valign="top">:</td>
            <td>8801611 775127, 8801741 775127, 8801842 775127, 8801971 775127</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
        </table></td>
        <td>&nbsp;</td>
        <td class="title_text_1">
		<form id="form1" name="form1" method="post" action="secure_email.php" onsubmit="return validation();">
                            <table class="text1" align="center" border="0" cellpadding="0" cellspacing="3" width="93%">
                              <tbody>
                                <tr>
                                  <td colspan="3" class="text"><img src="images/wian-feedback-icon.png" width="209" height="61" /></td>
                                  </tr>
                                <tr>
                                  <td class="text">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td class="text" width="114">Name</td>
                                  <td width="48">:</td>
                                  <td width="310"><input name="name" class="form" id="name" size="35" type="text">
                                      <font color="#ff0000">*</font></td>
                                </tr>
                                <tr>
                                  <td class="text">Address</td>
                                  <td>:</td>
                                  <td><input name="address" class="form" id="address" size="35" type="text"></td>
                                </tr>
                                <tr>
                                  <td class="text">Phone</td>
                                  <td>:</td>
                                  <td><input name="phone" id="phone" type="text">
                                      <font color="#ff0000">*</font></td>
                                </tr>
                                <tr>
                                  <td class="text">Zip Code</td>
                                  <td>:</td>
                                  <td><input name="zip" class="form" id="zip" size="35" type="text"></td>
                                </tr>
                                <tr>
                                  <td class="text">Country</td>
                                  <td>:</td>
                                  <td><select size="1" name="country" id="country" class="style8">
                                      <option selected="selected" value="">-- Choose One --</option>
                                      <option value="Afghanistan"> Afghanistan</option>
                                      <option value="Albania"> Albania</option>
                                      <option value="Algeria"> Algeria</option>
                                      <option value="American-Samoa"> American-Samoa</option>
                                      <option value="Andorra"> Andorra</option>
                                      <option value="Angola">Angola</option>
                                      <option value="Anguilla"> Anguilla</option>
                                      <option value="Antigua-and-Barbuda"> Antigua-and-Barbuda</option>
                                      <option value="Argentina"> Argentina</option>
                                      <option value="Armenia"> Armenia</option>
                                      <option value="Ascension-Island"> Ascension-Island</option>
                                      <option value="Australia"> Australia</option>
                                      <option value="Austria"> Austria</option>
                                      <option value="Azerbaijan"> Azerbaijan</option>
                                      <option value="Bahamas"> Bahamas</option>
                                      <option value="Bahrain"> Bahrain</option>
                                      <option value="Bangladesh"> Bangladesh</option>
                                      <option value="Barbados"> Barbados</option>
                                      <option value="Belarus"> Belarus</option>
                                      <option value="Belgium"> Belgium</option>
                                      <option value="Belize">Belize</option>
                                      <option value="Benin">Benin</option>
                                      <option value="Bermuda"> Bermuda</option>
                                      <option value="Bhutan">Bhutan</option>
                                      <option value="Bolivia"> Bolivia</option>
                                      <option value="Bosnia-and-Herzegovina"> Bosnia-and-Herzegovina</option>
                                      <option value="Botswana"> Botswana</option>
                                      <option value="Brazil">Brazil</option>
                                      <option value="British-Indian-Ocean-Territory"> British-Indian-Ocean-Territory</option>
                                      <option value="Brunei-Darussalam"> Brunei-Darussalam</option>
                                      <option value="Bulgaria"> Bulgaria</option>
                                      <option value="Burkina-Faso"> Burkina-Faso</option>
                                      <option value="Burma">Burma (Myanmar)</option>
                                      <option value="Burundi"> Burundi</option>
                                      <option value="Camaroon"> Camaroon</option>
                                      <option value="Cambodia"> Cambodia</option>
                                      <option value="Cameroon"> Cameroon</option>
                                      <option value="Canada">Canada</option>
                                      <option value="Cape-Verde"> Cape-Verde</option>
                                      <option value="Cayman-Islands"> Cayman-Islands</option>
                                      <option value="Central-African-Republic"> Central-African-Republic</option>
                                      <option value="Chad"> Chad</option>
                                      <option value="Chile">Chile</option>
                                      <option value="China">China</option>
                                      <option value="Christmas-Island"> Christmas-Island</option>
                                      <option value="Cocos-(Keeling)-Islands"> Cocos-(Keeling)-Islands</option>
                                      <option value="Colombia"> Colombia</option>
                                      <option value="Comoros"> Comoros</option>
                                      <option value="Congo">Congo</option>
                                      <option value="Cook-Islands"> Cook-Islands</option>
                                      <option value="Costa-Rica"> Costa-Rica</option>
                                      <option value="Cote-D-Ivoire"> Cote-D-Ivoire</option>
                                      <option value="Croatia"> Croatia</option>
                                      <option value="Cuba">Cuba</option>
                                      <option value="Cyprus">Cyprus</option>
                                      <option value="Czech-Republic"> Czech-Republic</option>
                                      <option value="Denmark"> Denmark</option>
                                      <option value="Djibouti"> Djibouti</option>
                                      <option value="Dominica"> Dominica</option>
                                      <option value="Dominican-Republic"> Dominican-Republic</option>
                                      <option value="Ecuador"> Ecuador</option>
                                      <option value="Egypt">Egypt</option>
                                      <option value="El-Salvador"> El-Salvador</option>
                                      <option value="Equatorial-Guinea"> Equatorial-Guinea</option>
                                      <option value="Eritrea"> Eritrea</option>
                                      <option value="Estonia"> Estonia</option>
                                      <option value="Ethiopia"> Ethiopia</option>
                                      <option value="Falkland-Islands"> Falkland-Islands</option>
                                      <option value="Faroe-Islands"> Faroe-Islands</option>
                                      <option value="Federated-States-of-Micronesia"> Federated-States-of-Micronesia</option>
                                      <option value="Fiji"> Fiji</option>
                                      <option value="Finland"> Finland</option>
                                      <option value="France">France</option>
                                      <option value="French-Guiana"> French-Guiana</option>
                                      <option value="French-Polynesia"> French-Polynesia</option>
                                      <option value="Gabon">Gabon</option>
                                      <option value="Georgia"> Georgia</option>
                                      <option value="Germany"> Germany</option>
                                      <option value="Ghana">Ghana</option>
                                      <option value="Gibralter"> Gibralter</option>
                                      <option value="Greece">Greece</option>
                                      <option value="Greenland"> Greenland</option>
                                      <option value="Grenada"> Grenada</option>
                                      <option value="Guadeloupe"> Guadeloupe</option>
                                      <option value="Guam">Guam</option>
                                      <option value="Guatemala"> Guatemala</option>
                                      <option value="Guernsey"> Guernsey</option>
                                      <option value="Guinea">Guinea</option>
                                      <option value="Guinea-Bissau"> Guinea-Bissau</option>
                                      <option value="Guyana">Guyana</option>
                                      <option value="Haiti">Haiti</option>
                                      <option value="Holy-See"> Holy-See</option>
                                      <option value="Honduras"> Honduras</option>
                                      <option value="Hong-Kong"> Hong-Kong</option>
                                      <option value="Hungary"> Hungary</option>
                                      <option value="Iceland"> Iceland</option>
                                      <option value="India">India</option>
                                      <option value="Indonesia"> Indonesia</option>
                                      <option value="Iran">Iran</option>
                                      <option value="Iraq">Iraq</option>
                                      <option value="Ireland"> Ireland</option>
                                      <option value="Isle-of-Man"> Isle-of-Man</option>
                                      <option value="Israel">Israel</option>
                                      <option value="Italy">Italy</option>
                                      <option value="Jamaica"> Jamaica</option>
                                      <option value="Japan">Japan</option>
                                      <option value="Jarvis-Island"> Jarvis-Island</option>
                                      <option value="Jersey">Jersey</option>
                                      <option value="Jordan">Jordan</option>
                                      <option value="Kazakhistan"> Kazakhistan</option>

                                      <option value="Kenya">Kenya</option>
                                      <option value="Kiribati"> Kiribati</option>
                                      <option value="Korea-(Peoples-Republic-of)"> Korea-(Peoples-Republic-of)</option>
                                      <option value="Korea-(Republic-of)"> Korea-(Republic-of)</option>
                                      <option value="Kuwait"> Kuwait</option>
                                      <option value="Kyrgyzstan"> Kyrgyzstan</option>
                                      <option value="Laos">Laos</option>
                                      <option value="Latvia">Latvia</option>
                                      <option value="Lebanon"> Lebanon</option>
                                      <option value="Lesotho"> Lesotho</option>
                                      <option value="Liberia"> Liberia</option>
                                      <option value="Libya">Libya</option>
                                      <option value="Liechtenstein"> Liechtenstein</option>
                                      <option value="Lithuania"> Lithuania</option>
                                      <option value="Luxembourg"> Luxembourg</option>
                                      <option value="Macau">Macau</option>
                                      <option value="Macedonia"> Macedonia</option>
                                      <option value="Madagascar"> Madagascar</option>
                                      <option value="Malawi">Malawi</option>
                                      <option value="Malaysia"> Malaysia</option>
                                      <option value="Maldives"> Maldives</option>
                                      <option value="Mali">Mali</option>
                                      <option value="Malta">Malta</option>
                                      <option value="Marshall-Islands"> Marshall-Islands</option>
                                      <option value="Martinique"> Martinique</option>
                                      <option value="Mauritius"> Mauritius</option>
                                      <option value="Mayotte"> Mayotte</option>
                                      <option value="Mexico">Mexico</option>
                                      <option value="Moldavia"> Moldavia</option>
                                      <option value="Monaco">Monaco</option>
                                      <option value="Mongolia"> Mongolia</option>
                                      <option value="Montenegro"> Montenegro</option>
                                      <option value="Montserrat"> Montserrat</option>
                                      <option value="Morocco"> Morocco</option>
                                      <option value="Mozambique"> Mozambique</option>
                                      <option value="Namibia"> Namibia</option>
                                      <option value="Nauru">Nauru</option>
                                      <option value="Nepal">Nepal</option>
                                      <option value="Netherlands"> Netherlands</option>
                                      <option value="Netherlands-Antilles"> Netherlands-Antilles</option>
                                      <option value="New-Caledonia"> New-Caledonia</option>
                                      <option value="New-Zealand"> New-Zealand</option>
                                      <option value="Nicaragua"> Nicaragua</option>
                                      <option value="Niger">Niger</option>
                                      <option value="Nigeria"> Nigeria</option>
                                      <option value="Niue">Niue</option>
                                      <option value="Norfolk-Island"> Norfolk-Island</option>
                                      <option value="Northern-Cypress"> Northern-Cypress</option>
                                      <option value="Northern-Mariana-Islands"> Northern-Mariana-Islands</option>
                                      <option value="Norway"> Norway</option>
                                      <option value="Oman">Oman</option>
                                      <option value="Pakistan"> Pakistan</option>
                                      <option value="Palau">Palau</option>
                                      <option value="Panama">Panama</option>
                                      <option value="Papua-New-Guinea"> Papua-New-Guinea</option>
                                      <option value="Paraguay"> Paraguay</option>
                                      <option value="Peru">Peru</option>
                                      <option value="Philippines"> Philippines</option>
                                      <option value="Pitcairn"> Pitcairn</option>
                                      <option value="Poland">Poland</option>
                                      <option value="Portugal"> Portugal</option>
                                      <option value="Puerto-Rico"> Puerto-Rico</option>
                                      <option value="Qatar">Qatar</option>
                                      <option value="Reunion"> Reunion</option>
                                      <option value="Romania"> Romania</option>
                                      <option value="Russian-Federation"> Russian-Federation</option>
                                      <option value="Rwanda">Rwanda</option>
                                      <option value="Saint-Vincent-and-the-Grenadines"> Saint-Vincent-and-the-Grenadines&nbsp;</option>
                                      <option value="San-Marino"> San-Marino</option>
                                      <option value="Sao-Tome-and-Principe"> Sao-Tome-and-Principe</option>
                                      <option value="Saudi-Arabia"> Saudi-Arabia</option>
                                      <option value="Senegal"> Senegal</option>
                                      <option value="Serbia">Serbia</option>
                                      <option value="Serbia-and-Montenegro"> Serbia-and-Montenegro</option>
                                      <option value="Seychelles"> Seychelles</option>
                                      <option value="Sierra-Leone"> Sierra-Leone</option>
                                      <option value="Singapore"> Singapore</option>
                                      <option value="Slovakia"> Slovakia</option>
                                      <option value="Slovenia"> Slovenia</option>
                                      <option value="Solomon-Islands"> Solomon-Islands</option>
                                      <option value="Somalia"> Somalia</option>
                                      <option value="South-Africa"> South-Africa</option>
                                      <option value="South-Georgia"> South-Georgia</option>
                                      <option value="South-Sandwich-Islands"> South-Sandwich-Islands</option>
                                      <option value="Spain"> Spain</option>
                                      <option value="Sri-Lanka"> Sri-Lanka</option>
                                      <option value="St.-Helena"> St.-Helena</option>
                                      <option value="St.-Kitts-and-Nevis"> St.-Kitts-and-Nevis</option>
                                      <option value="St.-Lucia"> St.-Lucia</option>
                                      <option value="St.-Pierre-and-Miquelon"> St.-Pierre-and-Miquelon</option>
                                      <option value="St.-Vincent-and-the-Grenadines"> St.-Vincent-and-the-Grenadines</option>
                                      <option value="Sudan"> Sudan</option>
                                      <option value="Suriname"> Suriname</option>
                                      <option value="Svalbard"> Svalbard</option>
                                      <option value="Swaziland"> Swaziland</option>
                                      <option value="Sweden">Sweden</option>
                                      <option value="Switzerland"> Switzerland</option>
                                      <option value="Syrian-Arab-Republic"> Syrian-Arab-Republic</option>
                                      <option value="Taiwan">Taiwan</option>
                                      <option value="Tajikistan"> Tajikistan</option>
                                      <option value="Tanzania"> Tanzania</option>
                                      <option value="Thailand"> Thailand</option>
                                      <option value="The-Bahamas"> The-Bahamas</option>
                                      <option value="The-Gambia"> The-Gambia</option>
                                      <option value="Togo">Togo</option>
                                      <option value="Tokelau"> Tokelau</option>
                                      <option value="Tonga">Tonga</option>
                                      <option value="Trinidad-and-Tobago"> Trinidad-and-Tobago</option>
                                      <option value="Tristan-da-Cunha"> Tristan-da-Cunha</option>
                                      <option value="Tunisia"> Tunisia</option>
                                      <option value="Turkey">Turkey</option>
                                      <option value="Turkmenistan"> Turkmenistan</option>
                                      <option value="Turks-and-Caicos-Islands"> Turks-and-Caicos-Islands</option>
                                      <option value="Tuvalu"> Tuvalu</option>
                                      <option value="Uganda">Uganda</option>
                                      <option value="Ukraine"> Ukraine</option>
                                      <option value="United-Arab-Emirates"> United-Arab-Emirates</option>
                                      <option value="United-Kingdom"> United-Kingdom</option>
                                      <option value="United States"> United States </option>
                                      <option value="Uruguay"> Uruguay</option>
                                      <option value="Uzbekistan"> Uzbekistan</option>
                                      <option value="Vanuatu"> Vanuatu</option>
                                      <option value="Venezuela"> Venezuela</option>
                                      <option value="Viet-Nam"> Viet-Nam</option>
                                      <option value="Virgin-Islands-(U.K.)"> Virgin-Islands-(U.K.)</option>
                                      <option value="Virgin-Islands-(U.S.)"> Virgin-Islands-(U.S.)</option>
                                      <option value="Wallis-and-Futanu-Islands"> Wallis-and-Futanu-Islands</option>
                                      <option value="Western-Sahara"> Western-Sahara</option>
                                      <option value="Western-Samoa"> Western-Samoa</option>
                                      <option value="Yemen">Yemen</option>
                                      <option value="Yugoslavia"> Yugoslavia</option>
                                      <option value="Zaire">Zaire</option>
                                      <option value="Zambia">Zambia</option>
                                      <option value="Zimbabwe"> Zimbabwe</option>
                                    </select>
                                      <font color="#ff0000">*</font></td>
                                </tr>
                                <tr>
                                  <td class="text">E-mail</td>
                                  <td>:</td>
                                  <td><input name="email" class="form" id="email" size="35" type="text">
                                      <font color="#ff0000">*</font></td>
                                </tr>
                                <tr>
                                  <td class="text">Subject</td>
                                  <td>:</td>
                                  <td><input name="subject" class="form" id="subject" size="35" type="text">
                                      <font color="#ff0000">*</font></td>
                                </tr>
                                <tr>
                                  <td class="text">Message</td>
                                  <td>:</td>
                                  <td><textarea name="mess" cols="33" rows="5" class="form" id="mess"></textarea>
                                      <font color="#ff0000">*</font></td>
                                </tr>
                                <tr>
                                  <td class="text5">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td><input name="Submit" value="Submit" style="border: 1px solid rgb(0, 51, 153); font-size: 8pt; font-weight: bold; font-family: Verdana,Arial,Helvetica,sans-serif; color: rgb(255, 255, 255); background-color: rgb(0, 153, 204);" type="submit">
                                    &nbsp;&nbsp;
                                    <input name="Submit2" value="Reset" style="border: 1px solid rgb(0, 51, 153); font-size: 8pt; font-weight: bold; font-family: Verdana,Arial,Helvetica,sans-serif; color: rgb(255, 255, 255); background-color: rgb(0, 153, 204);" type="reset"></td>
                                </tr>
                                <tr>
                                  <td class="text5">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                        </form>		</td>
      </tr>
    </table></td>
  </tr>
</table>
