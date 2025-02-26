# API Documentation
- Gusti Agung Putu Bintang Andika Putra_2401010507
## 💁‍♀️ Allowed HTTP request
- GET : To GET data from the API
- POST    : To send POST request to the API ( Create data )
- PUT     : To send PUT request to the API ( Update data )
- DELETE  : To delete data on the API 
## 📝 Description Of Usual Server Responses
- 200 `OK` - Request was successful
- 404 `Not Found` - Requested data was not found
## 📚 Books Attributes
- id `BIGINT` : Unique identifier ( Primary Key )
- book_name `varchar` : Book Name
- description `varchar` : Book Description
- author `varchar` : Book author
## 🔖 GET Method Example
### Getting all data
#### Book URL : 
```
http://localhost:8000/api/books
```
#### Result Examples :
```json
[
    {
        "id": 3,
        "title": "Sint id iusto perferendis quos possimus nobis rerum.",
        "description": "Et consequatur vero et cumque tenetur. Ut sunt ex pariatur quis rerum. Dolorem consequatur eum esse. Voluptas tempora quia dolores maiores officiis rem ut ea.",
        "author": "Hillary Rosenbaum",
        "created_at": "2025-02-25T06:57:49.000000Z",
        "updated_at": "2025-02-25T06:57:49.000000Z"
    },
    {
        "id": 4,
        "title": "Quaerat laborum provident in quos eos accusantium reprehenderit.",
        "description": "Architecto voluptatum maxime corporis veniam aliquam qui. Vel accusamus eius dolore sequi voluptatem corrupti. Rem sunt iusto molestias sint qui. Itaque molestiae dolorem et deleniti ullam vel ea.",
        "author": "Idell Armstrong",
        "created_at": "2025-02-25T06:57:49.000000Z",
        "updated_at": "2025-02-25T06:57:49.000000Z"
    },
    {
        "id": 5,
        "title": "Putt",
        "description": "testsss",
        "author": "bintang",
        "created_at": "2025-02-25T06:57:49.000000Z",
        "updated_at": "2025-02-26T03:32:15.000000Z"
    }
]
```

### Getting a specific book data based on ID
#### Book URL : 
```
http://localhost:8000/api/books/{id}
```
#### Result Examples :
```json
{
    "id": 9,
    "title": "post2",
    "description": "testing proses post1 dengan api",
    "author": "bintang andika",
    "created_at": "2025-02-26T02:39:59.000000Z",
    "updated_at": "2025-02-26T02:39:59.000000Z"
}
```
## 🧾 POST Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/books
```
#### Body :
```json
{
    "title":"test title new",
    "description":"new description",
    "author":"bintang andika"
}
```
## ✍ PUT Method Example
### Book Example
#### URL :
```
http://localhost:8000/api/books/{id}
```
#### Body :
```json
{
    "title":"changed title",
    "description":"changed description",
    "author":"changed author"
}
```
## ❌ DELETE Method Example
### Book
#### URL :
```
http://localhost:8000/api/books/{id}
