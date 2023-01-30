from flask import Blueprint,render_template

views = Blueprint('views', __name__)

@views.route('/') #whenever  we go to the homepage of our website the home def will run 
def home():
    return render_template("home.html")
    
