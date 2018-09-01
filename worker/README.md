PHP Worker Design
=================

Use PHP CLI to run the worker script, there are some main points as following:

1. Common connections such as MySQL Database or Redis memory cache always keep the connection as default, so that you could create connect at first then use the connection to operate continuously.

2. Listening with high frequency would cost the usage, you could listen with low frequency but when getting and done a task, executing next listen without sleep.
