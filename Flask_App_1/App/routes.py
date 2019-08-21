from flask import render_template
from App import app
from App.forms import LoginForm

@app.route('/')
@app.route('/index')
def index():
    user = {'username' : 'Natey'}
    posts = [
        {
            'author': {'username':'John'},
            'body':'Yeets'
        },
    ]
    return render_template('index.html', title='Home', user=user, posts=posts)

@app.route('/login')
def login():
    form = LoginForm()
    return render_template('login.html', title='Sign In', form=form)
