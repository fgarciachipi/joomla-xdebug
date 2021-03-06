# Joomla + Xdebug + Docker + Visual Studio Code

Sometimes it is hard to start working with a technology because all the initial setup that is required. Sometimes your workspace get messy with all the environments configured. The idea behind this repository is to simplify the start of the development with Joomla and of course, keep your machine clean.

To achieve these two goals I used [Docker](https://www.docker.com/). Take the frustration out of setting up development environments with Docker, be productive since day one. Docker removes the friction of “dependency hell” to make getting started and shipping new code faster and easier. 

This repository allows you to quickly start developing and/or debugging your Joomla theme, plugin or module.

## Requirements :sunglasses:

1. Install Git
2. Install Docker
3. Install Visual Studio Code (Can be changed for the IDE of your preference if it supports Xdebug)
4. Install Xdebug extension for Visual Studio Code (Or the extension that the IDE installed in the step 3 supports)

The code in this repository has been tested using Windows 10, however the same tools are available in other operating systems like Mac OS and Linux.

These are the versions of the tools used:

- Visual Studio Code: v1.33.1 | [download](https://code.visualstudio.com/)
- Xdebug extension for Visual Studio Code (PHP Debug): v1.13.0 | [download](https://marketplace.visualstudio.com/items?itemName=felixfbecker.php-debug)
- Docker Desktop: 2.0.0.3 (31259) | [download](https://store.docker.com/)
- Docker compose: v3.7
- Joomla Image: joomla:3.9.5-php7.1 | [download](https://hub.docker.com/_/joomla)
- Xdebug: v2.7.1 | [home page](https://xdebug.org/)

## Steps to use this repository :nerd_face:

**1. Clone the repository.**

```
git clone https://github.com/fgarciachipi/joomla-xdebug.git
```

![git clone](https://github.com/fgarciachipi/joomla-xdebug/wiki/images/GitClone.PNG)

Once the repository is cloned, we need to create a folder named `html` inside the repository folder. This folder is used for the Joomla container to storage the site (see [docker-compose.yml](https://github.com/fgarciachipi/joomla-xdebug/blob/189bf0aec753635153d29efd1648509050740933/docker-compose.yml#L17) file).

At this point you should have these folders in your local repository:

![local folders](https://github.com/fgarciachipi/joomla-xdebug/wiki/images/htmlFolder.PNG)


**2. Run the container.**

Inside the `joomla-xdebug` folder run the following command:

```
docker-compose -f docker-compose.yml up
```

Wait until the command finishes and then access http://localhost:9090/ or https://localhost:9191, those are the urls where the Joomla site is running.


**3. Start coding.**

After the container is running you can open the folder `joomla-xdebug` in the Visual Studio Code and see that the folder `html` is not empty, it has the Joomla files.

![VS](https://github.com/fgarciachipi/joomla-xdebug/wiki/images/vsFolder.PNG)

There is a [launch.json](https://github.com/fgarciachipi/joomla-xdebug/blob/master/.vscode/launch.json) file inside the folder `.vscode` with the debug configuration. Add the breakpoints in the code and go to the Debug Menu (Ctrl + Shift + D) and click on the Start Debugging button.

![xdebug](https://github.com/fgarciachipi/joomla-xdebug/wiki/images/xdebug.PNG)


## Final notes :coffee:

- Check that your Docker is configured to run linux container.
- Since the `html` folder is excluded from git, if you are going to create a theme or a plugin you need to add the exception to the [.gitignore](https://github.com/fgarciachipi/joomla-xdebug/blob/master/.gitignore) file.
