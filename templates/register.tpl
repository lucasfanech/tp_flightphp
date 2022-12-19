{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
<h1>Register</h1>
<div id='main'>
<p>Contenu du template register.tpl</p>

    <form action="" method="post" >
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" />
        <label for"email">Email</label>
        <input type="text" name="email" id="email" value="" />
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" />
        <button type="submit" name="register">Register</button>

    </form>
</div>
{/block}