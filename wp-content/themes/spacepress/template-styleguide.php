
<?php
/*
Template Name: Styleguide
 * This template basically inserts the styleguide markup in its entirety.
*/

get_header(); ?>

    <div class="island text-center">
      <h1>Style Guide</h1>
      <p><a href="https://github.com/space150/spaceBase">Built using spaceBase</a></p>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Basic Grid</h2>
      <p>The grid below shows a combination of nested, reversed, and gutterless grids. Each integer represents the high-level grid item you are looking at, and each decimal represents the grid item’s level of nesting (if any), e.g. Grid 2.3 represents the third nested grid inside of the second major grid.</p>
      <div class="grid-wrapper">
        <div class="grid  one-half">
          <div class="grid-wrapper">
            <div class="grid">
              <p class="sg-demo-block">Grid 1.1</p>
            </div>
            <div class="grid  one-third">
              <p class="sg-demo-block">Grid 1.2</p>
            </div>
            <div class="grid  two-thirds">
              <p class="sg-demo-block">Grid 1.3</p>
            </div>
          </div>
        </div>
        <div class="grid  one-half">
          <div class="grid-wrapper">
            <div class="grid  one-quarter">
              <p class="sg-demo-block">Grid 2.1</p>
            </div>
            <div class="grid  three-quarters">
              <p class="sg-demo-block">Grid 2.2</p>
            </div>
            <div class="grid">
              <p class="sg-demo-block">Grid 2.3</p>
            </div>
          </div>
        </div>
        <div class="grid">
          <h3 class="sg-heading">Reverse Grid</h3>
          <div class="grid-wrapper  grid-wrapper--rev">
            <div class="grid  one-third">
              <p class="sg-demo-block">Grid 3.1</p>
            </div>
            <div class="grid  one-third">
              <p class="sg-demo-block">Grid 3.2</p>
            </div>
            <div class="grid  one-third">
              <p class="sg-demo-block">Grid 3.3</p>
            </div>
          </div>
        </div>
        <div class="grid">
          <h3 class="sg-heading">Full Grid</h3>
          <div class="grid-wrapper  grid-wrapper--full">
            <div class="grid  one-eighth">
              <p class="sg-demo-block">Grid 4.1</p>
            </div>
            <div class="grid  two-eighths">
              <p class="sg-demo-block">Grid 4.2</p>
            </div>
            <div class="grid  three-eighths">
              <p class="sg-demo-block">Grid 4.3</p>
            </div>
            <div class="grid  two-eighths">
              <p class="sg-demo-block">Grid 4.4</p>
            </div>
          </div>
        </div>
        <div class="grid">
          <h3 class="sg-heading">Push and Pull</h3>
          <div class="grid-wrapper">
            <div class="grid  one-quarter  push--one-quarter">
              <p class="sg-demo-block">Grid 5.1</p>
            </div>
            <div class="grid  one-quarter  push--one-quarter">
              <p class="sg-demo-block">Grid 5.2</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Responsive Grid</h2>
      <p>The grid below shows a combination of nested, fully-responsive grids using breakpoint-specific classes.</p>
      <div class="grid-wrapper">
        <div class="grid  one-half">
          <div class="grid-wrapper">
            <div class="grid">
              <p class="sg-demo-block">Grid 1.1</p>
            </div>
            <div class="grid  lap-one-whole  desk-one-third">
              <p class="sg-demo-block">Grid 1.2</p>
            </div>
            <div class="grid  lap-one-whole  desk-two-thirds">
              <p class="sg-demo-block">Grid 1.3</p>
            </div>
          </div>
        </div>
        <div class="grid  one-half">
          <div class="grid-wrapper">
            <div class="grid  one-half">
              <p class="sg-demo-block">Grid 2.1</p>
            </div>
            <div class="grid  one-half">
              <p class="sg-demo-block">Grid 2.2</p>
            </div>
            <div class="grid  lap-one-half  desk-one-third">
              <p class="sg-demo-block">Grid 2.3</p>
            </div>
            <div class="grid  lap-one-half  desk-one-third">
              <p class="sg-demo-block">Grid 2.4</p>
            </div>
            <div class="grid  desk-one-third">
              <p class="sg-demo-block">Grid 2.5</p>
            </div>
          </div>
        </div>
        <div class="grid  hand-one-half  lap-one-quarter desk-two-fifths">
          <p class="sg-demo-block">Grid 3.0</p>
        </div>
        <div class="grid  hand-one-half  lap-three-quarters desk-three-fifths">
          <p class="sg-demo-block">Grid 4.0</p>
        </div>
      </div>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Colors</h2>
      <ul class="h-list sg-colors">
        <li>
          <span style="background: #000000;" class="sg-swatch"></span>
          <span class="sg-label">#000000<br>$black</span>
        </li>
        <li>
          <span style="background: #666666;" class="sg-swatch"></span>
          <span class="sg-label">#666666<br>$gray-dark</span>
        </li>
        <li>
          <span style="background: #999999;" class="sg-swatch"></span>
          <span class="sg-label">#999999<br>$gray</span>
        </li>
        <li>
          <span style="background: #cccccc;" class="sg-swatch"></span>
          <span class="sg-label">#cccccc<br>$gray-light</span>
        </li>
        <li>
          <span style="background: #ffffff;" class="sg-swatch"></span>
          <span class="sg-label">#ffffff<br>$white</span>
        </li>
        <li>
          <span style="background: #7abcb5;" class="sg-swatch"></span>
          <span class="sg-label">#7abcb5<br>$primary</span>
        </li>
        <li>
          <span style="background: #41a29c;" class="sg-swatch"></span>
          <span class="sg-label">#41a29c<br>$secondary</span>
        </li>
        <li>
          <span style="background: #e48d38;" class="sg-swatch"></span>
          <span class="sg-label">#e48d38<br>$tertiary</span>
        </li>
        <li>
          <span style="background: #c46e35;" class="sg-swatch"></span>
          <span class="sg-label">#c46e35<br>$quaternary</span>
        </li>
      </ul>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Typography</h2>
      <h1>h1.Heading 1</h1>
      <h2>h2.Heading 2</h2>
      <h3>h3.Heading 3</h3>
      <h4>h4.Heading 4</h4>
      <h5>h5.Heading 5</h5>
      <h6>h6.Heading 6</h6>
      <div class="grid-wrapper">
        <div class="grid lap-one-third">
          <h3 class="sg-heading">Unordered List</h3>
          <ul>
            <li>list item 1</li>
            <li>list item 1
              <ul>
                <li>list item 2</li>
                <li>list item 2
                  <ul>
                    <li>list item 3</li>
                    <li>list item 3</li>
                  </ul>
                </li>
                <li>list item 2</li>
                <li>list item 2</li>
              </ul>
            </li>
            <li>list item 1</li>
            <li>list item 1</li>
          </ul>
        </div>
        <div class="grid lap-one-third">
          <h3 class="sg-heading">Ordered List</h3>
          <ol>
            <li>list item 1</li>
            <li>list item 1
              <ol>
                <li>list item 2</li>
                <li>list item 2
                  <ol>
                    <li>list item 3</li>
                    <li>list item 3</li>
                  </ol>
                </li>
                <li>list item 2</li>
                <li>list item 2</li>
              </ol>
            </li>
            <li>list item 1</li>
            <li>list item 1</li>
          </ol>
        </div>
        <div class="grid lap-one-third">
          <h3 class="sg-heading">Definition List</h3>
          <dl>
            <dt>Description name</dt>
            <dd>Description value</dd>
            <dt>Description name</dt>
            <dd>Description value</dd>
            <dd>Description value</dd>
            <dt>Description name</dt>
            <dt>Description name</dt>
            <dd>Description value</dd>
          </dl>
        </div>
      </div>
      <h3 class="sg-heading">Table</h3>
      <table>
        <thead>
          <tr>
            <th>Table Heading 1</th>
            <th>Table Heading 2</th>
            <th>Table Heading 3</th>
            <th>Table Heading 3</th>
            <th>Table Heading 4</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <td>Table Footer 1</td>
            <td>Table Footer 2</td>
            <td>Table Footer 3</td>
            <td>Table Footer 3</td>
            <td>Table Footer 4</td>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
          <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
            <td>Table Cell 4</td>
            <td>Table Cell 5</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Sample Content Block</h2>
      <p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <blockquote>
        <p>Some sort of famous witty quote marked up with a &lt;blockquote> and a child &lt;p> element.</p>
      </blockquote>
      <ul>
        <li>Superscript item<sup>sup</sup></li>
        <li>Subscript item<sub>sub</sub></li>
        <li><small>Small text for fine print.</small></li>
      </ul>
      <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Media Object</h2>
      <div class="grid-wrapper">
        <div class="grid lap-one-half">
          <div class="media landmark">
            <div class="media__item">
              <img src="http://placehold.it/80" alt="">
            </div>
            <div class="media__body">
              <p><strong>.media</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="media media--nowrap landmark">
            <div class="media__item">
              <img src="http://placehold.it/80" alt="">
            </div>
            <div class="media__body">
              <p><strong>.media.media--nowrap</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
        <div class="grid lap-one-half">
          <div class="media media--flip landmark">
            <div class="media__item">
              <img src="http://placehold.it/80" alt="">
            </div>
            <div class="media__body">
              <p><strong>.media.media--flip</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          <div class="media media--valign landmark">
            <div class="media__item">
              <img src="http://placehold.it/80" alt="">
            </div>
            <div class="media__body">
              <p><strong>.media.media--valign</strong>: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Form Buttons</h2>
      <form>
        <div class="grid-wrapper">
          <div class="grid lap-one-half">
            <p><input class="btn" type="button" value="Input type button"></p>
            <p><input class="btn" type="submit" value="Input type submit"></p>
            <p><input class="btn" type="submit" value="Input type submit disabled" disabled></p>
            <p><a class="btn">Link type button</a></p>
          </div>
          <div class="grid lap-one-half">
            <p><button class="btn" type="button">Button type button</button></p>
            <p><button class="btn" type="submit">Button type submit</button></p>
            <p><button class="btn" type="button" disabled>Button type button disabled</button></p>
          </div>
        </div>
      </form>
    </div>
    <div class="sg-landmark">
      <h2 class="sg-heading">Form Fields</h2>
      <form>
        <div class="grid-wrapper">
          <div class="grid lap-one-third">
            <div class="sg-field-container">
              <label for="text1">Text Input</label>
              <input type="text" placeholder="Text Input" id="text1" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="text2">Readonly Text Input</label>
              <input type="text" placeholder="Readonly Text Input" id="text2" readonly class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="text3">Disabled Text Input</label>
              <input type="text" placeholder="Disabled Text Input" id="text3" disabled class="form-control">
            </div>
            <div class="sg-field-container has-error">
              <label class="error">Error Input</label>
              <input type="text" placeholder="Text Input" id="error" class="form-control">
            </div>
            <div class="sg-field-container has-success">
              <label class="success">Valid</label>
              <input type="text" placeholder="Text Input" id="success" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="password">Password</label>
              <input type="password" placeholder="Type your Password" id="password" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="url">Web Address</label>
              <input type="url" placeholder="http://yoursite.com" id="url" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="email">Email Address</label>
              <input type="email" placeholder="name@email.com" id="email" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="search">Search</label>
              <input type="search" placeholder="Enter Search Term" id="search" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="text">Number Input</label>
              <input type="number" pattern="[0-9]*" placeholder="Enter a Number" id="text" class="form-control">
            </div>
          </div>
          <div class="grid lap-one-third">
            <div class="sg-field-container">
              <label for="textarea1">Textarea</label>
              <textarea placeholder="Enter your message here" cols="40" rows="3" id="textarea1" class="form-control"></textarea>
            </div>
            <div class="sg-field-container">
              <label for="textarea2">Readonly Textarea</label>
              <textarea placeholder="Readonly message" cols="40" rows="3" id="textarea2" readonly class="form-control"></textarea>
            </div>
            <div class="sg-field-container">
              <label for="textarea3">Disabled Textarea</label>
              <textarea placeholder="Disabled message" cols="40" rows="3" id="textarea3" disabled class="form-control"></textarea>
            </div>
            <div class="sg-field-container">
              <label for="select1">Select</label>
              <select id="select1" class="form-control">
                <optgroup label="Option Group">
                  <option>Option One</option>
                  <option>Option Two</option>
                  <option>Option Three</option>
                </optgroup>
              </select>
            </div>
            <div class="sg-field-container">
              <label for="select2">Disabled Select</label>
              <select id="select2" disabled class="form-control">
                <option>Option One</option>
                <option>Option Two</option>
              </select>
            </div>
            <div class="sg-field-container">
              <label for="multi-select">Multiple Select</label>
              <select id="multi-select" multiple size="4" class="form-control">
                <option>Option 1</option>
                <option>Option 2</option>
                <option>Option 3</option>
                <option>Option 4</option>
                <option>Option 5</option>
                <option>Option 6</option>
              </select>
            </div>
          </div>
          <div class="grid lap-one-third">
            <div class="sg-field-container">
              <label for="file">File input</label>
              <input type="file" id="file">
            </div>
            <legend>Checkbox</legend>
            <ul class="v-list">
              <li class="checkbox"><label for="checkbox1"><input type="checkbox" checked="checked" name="checkbox" id="checkbox1"> Choice A</label></li>
              <li class="checkbox"><label for="checkbox2"><input type="checkbox" name="checkbox" id="checkbox2"> Choice B</label></li>
              <li class="checkbox"><label for="checkbox3"><input type="checkbox" name="checkbox" id="checkbox3"> Choice C</label></li>
              <li class="checkbox"><label for="checkbox4"><input type="checkbox" name="checkbox" id="checkbox4" disabled> Choice Disabled</label></li>
              <li class="checkbox has-error"><label for="checkbox5"><input type="checkbox" name="checkbox" id="checkbox5"> Choice Error</label></li>
              <li class="checkbox has-success"><label for="checkbox6"><input type="checkbox" name="checkbox" id="checkbox6"> Choice Valid</label></li>
            </ul>
            <legend>Radio</legend>
            <ul class="v-list">
              <li class="radio"><label for="radio1"><input type="radio" checked="checked" name="radio" id="radio1"> Option 1</label></li>
              <li class="radio"><label for="radio2"><input type="radio" name="radio" id="radio2"> Option 2</label></li>
              <li class="radio"><label for="radio3"><input type="radio" name="radio" id="radio3"> Option 3</label></li>
              <li class="radio"><label for="radio4"><input type="radio" name="radio" id="radio4" disabled> Option Disabled</label></li>
              <li class="radio has-error"><label for="radio5"><input type="radio" name="radio" id="radio5"> Option Error</label></li>
              <li class="radio has-success"><label for="radio6"><input type="radio" name="radio" id="radio6"> Option Valid</label></li>
            </ul>
          </div>
        </div>
        <div class="grid-wrapper">
          <div class="grid lap-one-third">
            <h3 class="sg-heading">HTML5 Inputs</h3>
            <div class="sg-field-container">
              <label for="ic">Color input</label>
              <input type="color" value="#000000" id="ic" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="in">Number input</label>
              <input type="number" value="5" max="10" min="0" id="in" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="ir">Range input</label>
              <input type="range" value="10" id="ir">
            </div>
            <div class="sg-field-container">
              <label for="idd">Date input</label>
              <input type="date" value="1970-01-01" id="idd" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="idm">Month input</label>
              <input type="month" value="1970-01" id="idm" class="form-control">
            </div>
            <div class="sg-field-container">
              <label for="idw">Week input</label>
              <input type="week" value="1970-W01" id="idw" class="form-control">
            </div>
          </div>
        </div>
      </form>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
