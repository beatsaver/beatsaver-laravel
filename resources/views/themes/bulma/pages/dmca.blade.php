@extends('themes.bulma.layout')
@section('title', '- DMCA')

@section('content')
    <div class="content">
        <h1>BeatSaver Copyright Policy</h1>
        <p>BeatSaver has adopted the following policy concerning copyright infringement in accordance with the Digital Millennium Copyright Act, 17 U.S.C. 512. BeatSaver takes copyright and
            other intellectual property rights very seriously. It is BeatSaver's policy to (1) expeditiously block access to or remove content that it believes in good faith may contain
            material that infringes the copyrights of third parties and (2) remove and discontinue service to repeat offenders.</p>

        <h2>Procedure for Reporting Copyright Infringements:</h2>
        <p>If you believe that content residing on or accessible through the BeatSaver website or service infringes your copyright, please send a notice of claimed copyright infringement
            containing the following information to the Designated Agent listed below (consult legal counsel or refer to 17 U.S.C. 512(c) to confirm these requirements):</p>
        <ol>
            <li>A physical or electronic signature of a person authorized to act on behalf of the owner of the copyright that has been allegedly infringed;</li>
            <li>Identification of the copyrighted works claimed to have been infringed, or if multiple copyrighted works at a single online site are covered by a single notification, a
            representative list of such works at that site;</li>
            <li>Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and
            information reasonably sufficient to permit BeatSaver to locate the material;</li>
            <li>Contact information for the notifier, such as an address, telephone number and, if available, an e-mail address;</li>
            <li>A statement that the notifier has a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law;
            and</li>
            <li>A statement that the information in the notification is accurate, and under penalty of perjury, that the notifying party is authorized to act on behalf of the owner of the
            copyright that is allegedly infringed.</li>
        </ol>
        <p>Once a complete and proper notice of claimed copyright infringement is received by the Designated Agent, or if BeatSaver otherwise comes to believe in good faith that a file on the
            BeatSaver service may contain material that infringes copyright:</p>

        <h2>It is BeatSaver's policy:</h2>
        <ol>
            <li>to remove or disable access to the content identified in the notice of claimed infringement;</li>
            <li>to notify the content provider, member or user that it has removed or disabled access to the content; and</li>
            <li>to terminate in appropriate circumstances subscribers and account holders who are repeat infringers.</li>
        </ol>

        <h2>Procedure to Supply a Counter-Notice to the Designated Agent:</h2>
        <p>If the content provider, member or user believes that the content that was removed or to which access was disabled is not infringing, or the content provider, member or user
            believes that it has the right to post and use such content from the copyright owner, the copyright owner's agent, or pursuant to the law, the content provider, member or user may
            send a counter-notice containing the following information to the Designated Agent listed below:</p>
        <ol>
            <li>A physical or electronic signature of the content provider, member or user;</li>
            <li>Identification of the content that has been removed or to which access has been disabled and the location at which the material appeared before it was removed or access to it was
            disabled;</li>
            <li>A statement under penalty of perjury that the content provider, member or user has a good faith belief that the material was removed or disabled as a result of mistake or a
            misidentification of the material to be removed or disabled; and</li>
            <li>Content provider's, member's or user's name, address, telephone number, and, if available, e-mail address and a statement that such person or entity consents to the jurisdiction
            of the Federal District Court for the judicial district in which the content provider's, member's or user's address is located, or if the Content provider's, member's or user's
            address is located outside the United States, for Los Angeles County, California, and that such person or entity will accept service of process from the person who provided
            notification of the alleged infringement or an agent of such person.</li>
        </ol>
        <p>If a counter-notice is received by the Designated Agent, BeatSaver may send a copy of the counter-notice to the original complaining party informing that person that it may replace
            the removed content or cease disabling it in 10 business days. Unless the copyright owner files an action seeking a court order against the content provider, member or user, the
            removed content may be replaced, or access to it restored, in 10 to 14 business days or more after receipt of the counter-notice, at BeatSaver's sole discretion.</p>

        <hr />

        <p><b>To file a right claim, the fastest method is to file a GitHub issue using <a href="{{ config('beatsaver.githubUrl') }}/issues/new">THIS LINK</a>, Please use the subject
            format DMCA Request: XXX Song</b></p>
        
        <p>Make sure to include a link to file in question to prevent issues of locating the infringing content.</p>
        <p><b>You may also use this email: {{ config('beatsaver.legalEmail') }} to create a issue
            over email as well.</b></p>
    </div>
@endsection