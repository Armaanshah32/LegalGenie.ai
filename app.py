from flask import Flask, render_template, request, jsonify,redirect

app = Flask(__name__)

@app.route("/", methods=['GET'])
def index():
    return render_template("index.html")

@app.route("/document", methods=['GET'])
def document():
    return render_template("doc.html")

@app.route("/new", methods=['GET'])
def new():
    return render_template("new.html")

@app.route("/help", methods=['GET'])
def help():
    return render_template("help.html")

@app.route("/send", methods=['POST'])
def send():
    name = request.form['selectInput']
    course = request.form['textInput']
    print(name, course)
    return redirect("/")