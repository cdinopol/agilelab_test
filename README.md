# 2. Knowledge base

## 2.1 SQL Injections   
What are SQL Injections, how can we prevent them and what are the best practices in PHP to prevent them?

**@2.1 Answer:**   
**SQL Injections are unwanted data that alters the intended queries by inserting specific characters into user input. This can be prevented by escaping all inputs through built-in sql driver extensions like `mysqli_real_escape_string()` or `PDO::quote()` (`mysql_real_escape_string` for older php versions). Moreover, utilizing latest frameworks with proper ORM might save time worrying about basic attacks.**

   
## 2.2 === vs ==   
How are they different, when to use === and when to use ==

**@2.2 Answer:**  
**`===` is strict-identical comparison operator meaning it compares data type apart from value. Where as `==` is a loose comparison operator which only compares values regardless of the datatype.**

**`===` is specifcally useful in some cases like comparing numeric/float strings. `==` are used generally in basic comparison cases such as http parameters which are mostly string types**

   
## 2.3 Cloudflare   
How can we get the real IP address of the client when our website/server is using Cloudflare services.

**@2.3 Answer:**   
**Cloudflare forwards the requesting client ip-address through HTTP_CF_CONNECTING_IP header. This can be retrieved in PHP with:**
```
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
  $real_client_ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
```

   
# 3. Bug Fixing
When client or users reported an issue to you, describe what you do next. How do you go about trouble shooting the issue? Depending on what you find, what will your next step be? When do you consider the issue fixed or resolved?   
Tips: You are free to make ANY assumptions, write down your assumptions.   

**@3 Answer:**   
**First, get as much information as you can. Requests for the procedures on how to replicate the issue and possible to provide screenshots. Inspect weather it's a technical issue or just an incorrect usage. If it's a technical issue, replicate the procedure and get as much error logs to help debug the code. However, if it just an incorrect usage, inform client/user the proper steps and perhaps propose a UI/UX improvement to manager to avoid future complains and better user experience.**

# 4. Taking over an old project
You have recently been assigned to an old project, the previous developer had already left and you are tasked to take over the project and implement new features. However you are facing some problems, the new feature that you are implementating doesn't seem to go well with the existing features. The more you code, the more edge case you encounter.
Describe, in as much detail as you like, how you would handle this situation.   
Tips: You are free to make ANY assumptions, write down your assumptions.

**@4 Answer:**   
**I've been in this situation quite a lot so it's not new for me to take over projects, even some in the middle of development. Plugging in in someone's work is quite challenging BUT not impossible. The best way to proceed is to thoroughly investigate the code structure (easier if certain framework is used). Read through documentation if provided. If somehow the previous assumptions are not present, ensuring back-up and proper repository is always an option to make sure you have a save point. This way, scaling the code-base wouldn't be so scary, PREVENTION IS BETTER THAN CURE as they say. There are also cases, that the project is so poorly done that the fastest and most effecient solution is to create the whole thing from scratch and make sure proper documentation and CI pipelines are imposed so that future developers won't face the same issue all over again.**
