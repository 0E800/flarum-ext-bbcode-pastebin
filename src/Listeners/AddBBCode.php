<?php
namespace oe800\BBCodePastebin\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {


	 $event->configurator->BBCodes->addCustom(
            '[PASTEBIN]{SIMPLETEXT}[/PASTEBIN]',
            '<iframe src="//pastebin.com/embed_iframe/{SIMPLETEXT}" style="border:none;width:100%;height:210px"></iframe>'
        );


 	$event->configurator->BBCodes->addCustom(
            '[PASTEBINM]{SIMPLETEXT}[/PASTEBINM]',
            '<iframe src="//pastebin.com/embed_iframe/{SIMPLETEXT}" style="border:none;width:100%;height:680px"></iframe>'
        );

 	$event->configurator->BBCodes->addCustom(
            '[PASTEBINL]{SIMPLETEXT}[/PASTEBINL]',
            '<iframe src="//pastebin.com/embed_iframe/{SIMPLETEXT}" style="border:none;width:100%;height:980px"></iframe>'
        );




    }
}
