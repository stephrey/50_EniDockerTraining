# Write a first Dockerfile

Write a first Dockerfile and observe what happens. Using the Dive tool, find out how many layers the resulting image consists of

---

## the work to be done

Based on alpine image, create a new image. In the folder /apps an empty text file is present as "file.txt"

## The result

### Generate the container
<em>docker build -t "image1:1.0" .</em>


### Check that the work has been carried out correctly
* start the container in iteractiv mode
<em> docker run -it image1:1.0</em>
