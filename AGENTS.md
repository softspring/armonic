# AGENTS.md

<!-- softspring-package-rules:start -->

Shared working rules for Softspring bundles and packages.

## Documentation

- Keep package documentation in `softspring/armonic-docs`, on the same version branch as this repository. For example, package branch `6.1` uses documentation branch `6.1`; the published alias `6.1-dev` is not a Git branch.
- Confirm the package and documentation branches before making changes. Never switch branches, use another documentation version, or create a missing version branch without confirmation.
- Read `AGENTS.md` in the documentation repository and the relevant package guide before changing behavior or documentation.
- Keep installation, configuration, usage, extension guides, examples, maintenance guidance, and functional scope in `armonic-docs`. Do not add or expand package-local documentation or `docs/` directories.
- Keep the package README as a short entry point with its name, badges, a brief description, a link to the documentation on the matching branch, and contribution, security, and license links. Do not duplicate the guide there.
- Keep `LICENSE` and `SECURITY.md` in the package. A `CONTRIBUTING.md` file may link to the central contributor guide, but must not duplicate it.
- Keep functional contracts and planned capabilities in the matching central package guide. Clearly distinguish implemented behavior from planned work.
- Verify documentation against the code and tests on the selected branch. Write code and documentation in simple English.
- When moving existing documentation, preserve useful content, update links and navigation, and remove the replaced local content only after its central replacement is ready. Do not delete unrelated documentation as part of another task.
- Update the central guide with behavior changes in the same task. If the documentation checkout or matching branch is unavailable, report what is missing instead of silently writing documentation elsewhere.

## Changes and validation

- Inspect the branch, working tree, and worktrees before editing. Preserve unrelated work and package-specific rules.
- Use the package's existing commands and CI workflows. Use `composer.json` or `package.json` as the source for maintenance commands.
- Run checks appropriate to the change. For PHP implementation changes or a full package review, run `composer test` and then `composer test-bc` when available; never run them in parallel because both replace dependencies.
- Adapt validation to the package's actual stack. Do not run a dependency update solely for a documentation or working-rules edit.
- Keep secrets and machine-specific settings outside Git. State what was changed, what was verified, and what remains pending.

<!-- softspring-package-rules:end -->
