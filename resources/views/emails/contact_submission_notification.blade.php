<h2>New Contact Form Submission</h2>
<p><strong>Name:</strong> {{ $submission->name }}</p>
<p><strong>Email:</strong> {{ $submission->email }}</p>
<p><strong>Service:</strong> {{ $submission->service ?: '-' }}</p>
<p><strong>Message:</strong></p>
<p>{{ $submission->message }}</p>
