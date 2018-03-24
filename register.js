class Toggle extends React.Component {
  render() {



return (

<div>
<p id="regpage">WHO ARE YOU?</p>
<input type="radio" name="whoareyou" value="client" /><span id="left"> PERSON </span>
<input type="radio" name="whoareyou" value="contractor" defaultChecked /><span> BUSINESS</span>
<Contractor />
</div>
);
}
}

class Contractor extends React.Component {
  render() {

return (
<div>
<h5 id="info">BUSINESS INFO</h5>
<form action='' method='POST'>
<input type="text" name="businessname" placeholder="BUSINESS NAME*" />
<input type="text" name="phonenumber" placeholder="LOCAL BUSINESS PHONE NUMBER*" />
<input type="text" name="typeofservice" placeholder="TYPE OF SERVICE LINE*" />
<input type="text" name="website" placeholder="WEBSITE" />
<div className="in-line">
<input type="text" name="postalcode" placeholder="POSTAL CODE*" />
<input type="text" name="city" placeholder="CITY/TOWN*" />
</div> 
<div className="in-line">
<input type="text" name="province" placeholder="PROVINCE*" />
<input type="text" name="industry" placeholder="INDUSTRY*" />
</div>
<input type="checkbox" id="showinlist" name="showinlist" value="showinlist" />
<label for="showinlist">Display company address on listing.</label>
<h5 id="info">CONTACT INFO</h5>
<div className="in-line">
<input type="text" name="firstname" placeholder="FIRST NAME*" />
<input type="text" name="lastname" placeholder="LAST NAME*" />
</div>
<input type="text" name="email" placeholder="EMAIL ADDRESS" />
<div className="in-line">
<input type="text" name="birthday" placeholder="BIRTHDAY*" />
<input type="text" name="gender" placeholder="GENDER*" />
</div>
<input type="text" name="langpref" placeholder="LANGUAGE PREFERENCE" />
<input type="text" name="phone" placeholder="PHONE NUMBER TO REACH YOU*" />
<div className="g-recaptcha" data-sitekey="6LephkgUAAAAABj64Twl-oRhFO5bajqCXoGzHYpR"></div>
<p>I accept the Terms of Services Agreement.</p>
<input type="checkbox" id="showinlist" name="showinlist" value="showinlist" />
<label for="showinlist">I want to receive special offers and news by Newsletter.</label><br/>
<button type="submit" className="btn3">Send</button>
</form>
</div>


);

}

}


class Client extends React.Component {
  render() {

return (
<div>
<form action='' method='POST'>
<div className="in-line">
<input type="text" name="firstname" placeholder="FIRST NAME*" />
<input type="text" name="lastname" placeholder="LAST NAME*" />
</div>
<div className="in-line">
<input type="text" name="country" placeholder="COUNTRY*" />
<input type="text" name="city" placeholder="CITY*" />
</div> 
<div className="in-line">
<input type="text" name="email" placeholder="EMAIL ADDRESS" />
<input type="text" name="phone" placeholder="PHONE NUMBER*" />
</div> 
<input type="text" name="address" placeholder="ADDRESS*" />
<div className="in-line">
<input type="password" name="password" placeholder="PASSWORD*" />
<input type="password" name="confirmpass" placeholder="CONFIRM PASSWORD*" />
</div>
<div className="g-recaptcha" data-sitekey="6LephkgUAAAAABj64Twl-oRhFO5bajqCXoGzHYpR"></div>
<p>I accept the Terms of Services Agreement.</p>
<input type="checkbox" id="showinlist" name="showinlist" value="showinlist" />
<label for="showinlist">I want to receive special offers and news by Newsletter.</label><br/>
<button type="submit" className="btn3">Send</button>
</form>
</div>
);

}

}


ReactDOM.render(<Toggle />, document.getElementById('app'));
