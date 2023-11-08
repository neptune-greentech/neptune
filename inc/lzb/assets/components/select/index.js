/**
 * Styles
 */
import './editor.scss';

/**
 * External dependencies
 */
import CreatableSelect from 'react-select/creatable';
import AsyncSelect from 'react-select/async';
import ReactSelect, { components } from 'react-select';
import selectStyles from 'gutenberg-react-select-styles';

import { closestCenter, DndContext } from '@dnd-kit/core';
import { restrictToParentElement } from '@dnd-kit/modifiers';
import { SortableContext, useSortable } from '@dnd-kit/sortable';
import { CSS } from '@dnd-kit/utilities';

import { arrayMoveImmutable } from 'array-move';

export default function Select(props) {
	const { value, onChange } = props;

	let ThisSelect = ReactSelect;

	if (props.isAsync) {
		ThisSelect = AsyncSelect;
	} else if (props.isCreatable) {
		ThisSelect = CreatableSelect;
	}

	const selectProps = { ...props };

	// Tags.
	if (selectProps.isTags) {
		selectProps.isMulti = true;
		selectProps.components = {
			...(selectProps?.components || {}),
			DropdownIndicator: () => null,
			IndicatorSeparator: () => null,
			ClearIndicator: () => null,
			Menu: () => null,
		};
	}

	// isMulti + Sortable.
	if (selectProps.isMulti) {
		selectProps.components = {
			...(selectProps?.components || {}),
			MultiValue: (valProps) => {
				const onMouseDown = (e) => {
					e.preventDefault();
					e.stopPropagation();
				};
				const innerProps = {
					...valProps.innerProps,
					onMouseDown,
				};
				const {
					attributes,
					listeners,
					setNodeRef,
					transform,
					transition,
				} = useSortable({
					id: valProps.data.value,
				});
				const style = {
					transform: CSS.Translate.toString(transform),
					transition,
				};

				return (
					<div
						style={style}
						ref={setNodeRef}
						{...attributes}
						{...listeners}
					>
						<components.MultiValue
							{...valProps}
							innerProps={innerProps}
						/>
					</div>
				);
			},
		};

		return (
			<DndContext
				modifiers={[restrictToParentElement]}
				onDragEnd={(event) => {
					const { active, over } = event;

					if (active.id !== over.id) {
						const oldIndex = value.findIndex(
							(item) => item.value === active.id
						);
						const newIndex = value.findIndex(
							(item) => item.value === over.id
						);

						onChange(arrayMoveImmutable(value, oldIndex, newIndex));
					}
				}}
				collisionDetection={closestCenter}
			>
				<SortableContext
					items={
						value && value.length ? value.map((o) => o.value) : []
					}
				>
					<ThisSelect
						menuPlacement="auto"
						className="lazyblocks-component-select"
						styles={selectStyles}
						{...selectProps}
					/>
				</SortableContext>
			</DndContext>
		);
	}

	return (
		<ThisSelect
			menuPlacement="auto"
			className="lazyblocks-component-select"
			styles={selectStyles}
			{...selectProps}
		/>
	);
}
