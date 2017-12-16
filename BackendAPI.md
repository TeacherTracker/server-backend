# TeacherTracker_Backend


## API Docs (All Value Input is req.body)

* /api/insertTeacher : POST

> Requiring

    name : String (Teacher's Name)
    school : String (Teacher's School)
    
> Return

	{
		CODE:MESSAGE
	}


* /api/insertLocation : POST

> Requiring

    lat : Number (Teacher's Latitude)
    lon : Number (Teacher's Longitude)
    teacher_id : Number (Teacher's Id)
    
> Return

	{
		CODE:MESSAGE
	}


* /api/selectTeacherList : POST

> Requiring

    school : String (Teacher's school)
    
> Return

    {
        "id": (teacher_live_location's id),
        "name": (Teacher's name),
        "school": (Teacher's school),
        "created": (teacher_live_location's create time ),
        "lat": (Teacher's Latitude),
        "lon": (Teacher's Longitude),
        "teacher_id": (Teacher's id)
    }



