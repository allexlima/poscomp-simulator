<img src="https://github.com/allexlima/poscomp-simulator/blob/master/src/static/icon.png?raw=true" width="64">

## Welcome to Poscomp-Simulator

[![Heroku](https://heroku-badge.herokuapp.com/?app=poscomp-simulator)]()
[![License](https://img.shields.io/badge/license-MIT-green.svg)]()

Poscomp-Simulator is a simple webapp that allows you test your knowledge to [POSCOMP exam](http://www.sbc.org.br/educacao/poscomp).

:star2: Don't forget to give a star to this repo =)


### Setup

1. Install [composer](https://getcomposer.org/download/) in your OS

2. Clone the repo into your http server

    ```bash
    $ git clone https://github.com/allexlima/poscomp-simulator.git
    $ cd poscomp-simulator/
    ```

3. Download the dependences using composer

    ```bash
    $ composer install
	```

4. Access the webapp [http://localhost/poscomp-simulator](http://localhost/poscomp-simulator) and enjoy it

#### Deploy Poscomp-Simulator to Heroku without leaving the web browser!!

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/allexlima/poscomp-simulator)

#### Editing basic app info without access any php code

You can update some webapp attributes like **app name**, **supervisor/professor name**, **app details**, **exam max grade**, and if the app should **shuffle alternatives**. To do this updates you can edit the 6 first lines of `src/data.json` file! It isn't necessary change any PHP code =)

#### How to add, edit, or remove questions and answers?

1. Open `src/data.json` file, then in the `questions` array attribute, you'll be able to add, editing, or removing questions/answers. It's important to follow the template above:

	```json
	{
		"id": intValue,
		"text": stringValue,
		"answers": [
			{"id": "a", "text": stringValue, "status": boolValue},
			{"id": "b", "text": stringValue, "status": boolValue},
			{"id": "c", "text": stringValue, "status": boolValue},
			{"id": "d", "text": stringValu
You can update some webapp attributes like app name, supervisor/professor name, app details, exam max grade, and if the app should shuffle alternatives. To do this updates you can edit the 6 first lines on src/data.json file! It isn't necessary change any PHP code =)e, "status": boolValue},
			{"id": "e", "text": stringValue, "status": boolValue}
		],
		"source": stringValue
	}
	```

Obs: Each question MUST have exactly 5 alternatives!

---

Developed by [Allex Lima](http://allexlima.com)
###### Copyright © 2018 [Poscomp-Simulator](https://github.com/allexlima/poscomp-simulator) - Licensed by MIT LICENSE.
