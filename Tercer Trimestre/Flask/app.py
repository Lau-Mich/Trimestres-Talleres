from flask import Flask, render_template

app = Flask(__name__)

@app.route("/")
def formulario():
    return render_template("Formulario.html", titulo="Formulario con flask")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5080, debug=True)