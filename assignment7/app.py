from flask import Flask ,render_template
from flask_wtf import FlaskForm
from wtforms import StringField
from wtforms.validators import DataRequired



app = Flask(__name__)


@app.route('/')
def index():
   return render_template("Remember.html")

@app.route('/' ,methods=["post"])
def register():
   return 'Welcome My friend'

if __name__ == '__main__':
    app.run()
