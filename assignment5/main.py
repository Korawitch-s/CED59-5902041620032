from flask import Flask ,render_template

app = Flask(__name__)


@app.route('/',methods=["post"])
def Remember():
   return 'Hello'

@app.route('/',methods=["post"])
def Remember():
    return 'xyz';


if __name__ == '__main__':
    app.run()
