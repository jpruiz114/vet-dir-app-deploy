# vet dir app deploy

This project contains a single endpoint that is called via hook when a change is pushed to the master branch of the [vet dir app](https://github.com/jpruiz114/vet-dir-app "vet dir app") project.

The endpoint will gather some env variables in order to call the PhoneGap cloud service to pull the latest sources of the app and compile it in the cloud.
