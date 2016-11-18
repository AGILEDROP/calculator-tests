<h1>Agiledrop calculator PHPUnit sample</h1>
<p>This is a project that demonstrates tha basics of unit testing in PHP using the common PHPUnit library. Inside you can find a calculator class that handles basic operations bundled with a simple frontend for testing purposes.</p>

<p>Before starting this project you will need to run the following commands in the projects root folder, but make sure you have composer installed:</p>
<div># composer install</div>
<br />

<p>Here a a few example test you can write to test your PHPUnit understanding:</p>
<ul>
<li>Create a setUp constructor where you initiate the calculator object</li>
<li>Test empty input throws an exception</li>
<li>Test calculator throws an exception when dividing by 0</li>
<li>Test that if wrong operator is passed to set() the default one is addition</li>
<li>Make sure the result is displayed with a maximum of 5 decimals</li>
<li>Create a data provider function that tests different operations and makes sure the result is correct</li>
<li>Create a test for calculating a square root passing a mock AdvancedMathExtension object to the process() function</li>
</ul>
