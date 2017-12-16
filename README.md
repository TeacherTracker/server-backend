# TeacherTracker_Backend
=========
## Database Schema

### User Schema

> token : String

> userid : String

> password : String

> username : String

## API Docs (All Value Input is req.body)

* /test : POST

> Requiring

    school : String (User's School)
    
> Return

    200 : Success, {
        "yeah" : "yeah"
    }



* /location/update : POST

> Requiring

    username : String (User's ID)
    
    school : String (User's School)
    
> Return

    200 : Success, 200

    500 : Server Error
