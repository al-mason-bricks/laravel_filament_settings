import 'package:mason/mason.dart';

void run(HookContext context) {
  context.logger.warn('You need to run this command:');
  context.logger.warn('composer require reworck/filament-settings');
}
