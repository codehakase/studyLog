# StudyLog
A Study Log Web Application I built to log my progress during self created streaks.
![studylog](https://user-images.githubusercontent.com/9336187/27025236-b28db472-4f51-11e7-825b-3d8fa2440af4.png)

> Live Version coming soon!

## Usage
The main Concept of this app, is to create **Streaks**. Streaks are days related to a specific tag. The App allows one Log *Once* per day.

## Config
* Clone or download the Repo to your local Machine
    ```bash
    git clone git@github.com:codehakase/studyLog.git //SSH or
    
    git clone https://github.com/codehakase/studyLog.git //HTTPS

* Create a `.env` file from the `.env.example` and update the environment variable with your details:
    ```env
    DB_CONNECTION=YOUR_DATABASE_DB_CONNECTION
    DB_HOST=YOUR_DB_HOSST
    DB_PORT=YOUR_DB_PORT
    DB_DATABASE=DATABASE_TO_CONNECT_TO
    DB_USERNAME=DB_USERNAME
    DB_PASSWORD=DB_PASSWORD
    .....
    
    ```
* Install the required packages
  ```bash
  composer install
  ```
  
* Run Migrations from your Terminal
    ```bash
    php artisan migrate
    ```
* Serve up your application
   ```bash
   php artisan serve
   ```



## TODOs
* Notification on end of Streak
* Tags History
* Reports

### Development
* *Laravel* >= 5.4
* *PHP* >= 5.6 (7 recommended)
* *Homestead, Valet* - Optional
* *Built-in Server*


## Contributing 
Please feel free to fork this repo and contribute by submitting a pull request to add features, or to make some corrections to them.


## How can I thank you?
Why not star the github repo? I'd love the attention! Why not share the link for this repository on Twitter or Facebook? Spread the word!

and also, follow me on [twitter](http://twitter.com/codehakase)!

Thanks! Francis Sunday.
