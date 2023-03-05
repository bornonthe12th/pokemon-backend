## Simple Laravel Api to upload and View Pokemon List

### Example Requests
`GET http://localhost:80/api/pokemon`

### Results
```json
[
    {
    "id": 1,
    "name": "Pikachu",
    "weight": "60",
    "height": "4"
    },
    {
    "id": 2,
    "name": "Blastoise",
    "weight": "855",
    "height": "16"
    }
]
```

##### Install Requirements

* GNU make https://www.gnu.org/software/make/
* Docker https://docs.docker.com/engine/installation/
* Docker compose https://docs.docker.com/compose/install/



##### Install Dependencies in the following order below

```$xslt
    make install
```

##### Start Containers
```$xslt
    make sail-start
```

#### Run Migration
```$xslt
    make sail-migrate
```

