PHP Worker Design
=================

Use PHP CLI to run the worker script, there are some main points as following:

1. Prevent any continuous growth of runtime memory usage.

2. Common connections such as MySQL Database or Redis memorycache always refresh the connection while any transmission as default, so that you could create connect at first then use the connection for listen or operating continuously.

3. Listening with high frequency would cost the usage, you could listen with low frequency but when getting and done a task, executing next listen without sleep.
