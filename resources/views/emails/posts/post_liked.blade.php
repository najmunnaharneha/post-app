<x-mail::message>
# Your Post was liked

{{ $liker->name }} liked one of your post

<x-mail::button :url="route('posts.show',$post)">
View Post
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
